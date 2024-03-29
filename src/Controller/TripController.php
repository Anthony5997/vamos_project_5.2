<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Trip;
use App\Form\TripType;
use App\Repository\BookingRepository;
use App\Repository\TripRepository;
use App\Repository\UserExperienceLevelRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/trip")
 */
class TripController extends AbstractController
{
    /**
     * @Route("/", name="trip_index", methods={"GET"})
     */
    public function index(TripRepository $tripRepository): Response
    {
        return $this->render('trip/index.html.twig', [
            'trips' => $tripRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="trip_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $userConnected = $this->getUser();
        if($userConnected){

        $trip = new Trip();
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);
       // dd($form->isValid());
       
       
       if ($form->isSubmitted() && $request->get('trip')['arrival'] && $request->get('trip')['departure']) {
          
        $date = new \DateTime();
        $time = date('H:i:s');

        
        if($form->get('date_of_trip')->getData()->format('Y-m-d') >= $date->format('Y-m-d')){
           }else{
                $this->addFlash('error', 'La date sélectionnée est dépassée.');
                return $this->render('trip/new.html.twig', [
                    'trip' => $trip,
                    'form' => $form->createView(),
                ]);
           }


           if($form->get('startTime')->getData()->format('H:i:s') < $time && $form->get('date_of_trip')->getData()->format('Y-m-d') === $date->format('Y-m-d') ){
               $this->addFlash('error', 'L\'heure sélectionnée est dépassée.');
               return $this->render('trip/new.html.twig', [
                   'trip' => $trip,
                   'form' => $form->createView(),
                ]);
            }
            
            $formatDeparture = explode(",", $request->get('trip')['departure']);
            $formatArrival = explode(",", $request->get('trip')['arrival']);
            $trip->setArrival($formatArrival[0]);
            $trip->setDeparture($formatDeparture[0]);
            $trip->setCreatedAt($date);
            $trip->setTripCompleted(false);
            $trip->setTripFull(false);
            $trip->setTripStarted(false);
            $trip->setDriver($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trip);
            $entityManager->flush();
            $this->addFlash('success', 'Votre trajet a été publié');
            return $this->redirectToRoute('trip_show', ['id'=> $trip->getId()]);
        }else{
            
            $this->addFlash('error', 'Veuillez remplir tous les champs pour publier un trajet');
            return $this->render('trip/new.html.twig', [
                'trip' => $trip,
                'form' => $form->createView(),
            ]);
        }
    }else{
        $this->addFlash('error', 'Veuillez vous connecter pour publier un trajet');
        return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/{id}", name="trip_show", methods={"GET", "POST"})
     */
    public function show(Trip $trip): Response
    {
        return $this->render('trip/show.html.twig', [
            'trip' => $trip,
        ]);
    }

      /**
     * @Route("/{id}/finish", name="trip_finish", methods={"GET", "POST"})
     */
    public function finish(Trip $trip, UserExperienceLevelRepository $userExperienceLevelRepository, BookingRepository $bookingRepository, UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $trip->setTripCompleted(true);
        $user->setTripsMade($user->getTripsMade() + 1);

        if($user->getTripsMade() > 49){
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 6]);
            $user->setUserExperience($experience);
        }elseif($user->getTripsMade() > 39){
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 5]);
            $user->setUserExperience($experience);
        }elseif($user->getTripsMade() > 29){
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 4]);
        }elseif($user->getTripsMade() > 9){
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 3]);
            $user->setUserExperience($experience);
        }elseif($user->getTripsMade() > 1){
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 2]);
            $user->setUserExperience($experience);
        }else{
            $experience = $userExperienceLevelRepository->findOneBy(['id' => 1]);
            $user->setUserExperience($experience);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($trip);
        $entityManager->persist($user);
        $entityManager->flush();


       $allBooker =  $bookingRepository->getAllBooker($trip->getId());
       $adSender = $userRepository->findOneBy(['id' => "40f453a08b5a49008ebcde259f83001d"]);

       foreach($allBooker as $booker){

        $path="http://projet-final.loc/review/".$trip->getId()."/new";

        //dd($path);
           $message = new Message();
           $date = new \DateTime();
           $message->setSendAt($date);
           $message->setSender($adSender);
           $message->setReceiver($booker->getUser());
           $message->setContent("Votre trajet avec ".$trip->getDriver()->getFirstName() . " est terminé ! Laisser un avis sur votre expérience de voyage ! <a class='leave-review-button' href=".$path."> Laissez-nous votre avis ! </a>");
         // dd($message);

           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($message);
           $entityManager->flush();
       }

        $this->addFlash('success', 'Votre trajet est terminé ! ');
        return $this->redirectToRoute('user_edit', ['id' => $user->getId()]);
    }

          /**
     * @Route("/{id}/start", name="trip_start", methods={"GET", "POST"})
     */
    public function start(Trip $trip): Response
    {
        $user = $this->getUser()->getId();
        $trip->setTripStarted(true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($trip);
        $entityManager->flush();
        $this->addFlash('success', 'Votre trajet commence ! Bonne Route !');
        return $this->redirectToRoute('user_edit', ['id' => $user]);
    }


      /**
     * @Route("/details/{id}", name="trip_details", methods={"GET"})
     */
    public function details(Trip $trip, TripRepository $tripRepository, BookingRepository $bookingRepository): Response
    {
        // $user = $userRepository->findOneBy(['id' => $trip->getDriver()]);
        // $travelPreferences = $travelPreferencesRepository->findOneBy(['id' => $user->getTravelPreferences()]);
        // $experienceLevel = $userExperienceLevelRepository->findOneBy(['id' => $user->getUserExperience()]);
        // $vehicule = $vehiculeRepository->findOneBy(['id' => $user->getVehicule()]);
        // $user->setTravelPreferences($travelPreferences);
        // $user->setUserExperience($experienceLevel);
        // $user->setVehicule($vehicule);
        // $trip->setDriver($user);

        $user = $this->getUser();

        if($user){


        $booker = $bookingRepository->getAllBooker($trip);
        $checkBooking = $bookingRepository->bookingExist($user->getId(), $trip->getId());

  
            if($trip->getDriver()->getId() === $user->getId()){

                $checkBooking = "my";
            }

        $trip = $tripRepository->findUserInfoByTrip($trip);

        return $this->render('trip/details.html.twig', [
            'trip' => $trip,
            'checkBooking' => $checkBooking,
            'bookers' => $booker,
        ]);
        }else{

        $this->addFlash('success', 'Veuillez vous connecter pour consulter et réserver un trajet');
        return $this->redirectToRoute('login');
        }

    }

    /**
     * @Route("/treatment/{id}", name="trip_treatment", methods={"GET", "POST"}, priority=3)
     */
    public function treatment(Request $request, Trip $trip)
    {

        if($trip->getDuration() === null && $trip->getDistance() === null){


            if ($request->get('duration') && $request->get('distance') ) {
    
                $trip->setDuration($request->get('duration'));
                $trip->setDistance($request->get('distance'));
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($trip);
                $entityManager->flush();
    
              return new JsonResponse(
                [],
                Response::HTTP_OK
            );
            }else{
                return new JsonResponse(
                    ['message'=>'Une erreur est survenu lors de la création du trajet'],
                    Response::HTTP_OK
                );  
            }

        }else{

            return new JsonResponse(
                ['message'=>'Distance et temps de trajet déjà ajouté'],
                Response::HTTP_OK
            ); 
        }
    }

    /**
     * @Route("/{id}/edit", name="trip_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Trip $trip): Response
    {
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trip_index');
        }

        return $this->render('trip/edit.html.twig', [
            'trip' => $trip,
            'form' => $form->createView(),
        ]);
    }


       /**
     * @Route("/search", name="trip_search", methods={"GET"}, priority=4)
     */
    public function search(Request $request, TripRepository $tripRepository, UserRepository $userRepository): Response
    {
        $arrivalSearch = $request->get('arrivalSearch');
        $departureSearch = $request->get('departureSearch');
        $dateSearch = $request->get('dateSearch');
        
        if ( $arrivalSearch && $departureSearch && $dateSearch ) {

            $result = $tripRepository->findOnTripWithDate($arrivalSearch, $departureSearch, $dateSearch);
            
            if($result !== []){
                
                $user = $userRepository->findOneBy(['id' => $result[0]->getDriver()]);
              
                $result[0]->setDriver($user);
          
                return $this->render('trip/trip_found.html.twig', [
                    'tripFound' => $result,
                ]);
            }

            return $this->render('trip/trip_found.html.twig', []);

        }elseif($arrivalSearch && $departureSearch && $dateSearch === null){

            $this->addFlash('error', 'Veuillez remplir tous les champs pour effectuer une recherche');
            return $this->render('trip/trip_found.html.twig', [
                'tripFound' => 'nope',
            ]);
        }

        return $this->render('trip/search.html.twig', [

        ]);

    }


    /**
     * @Route("/delete/{id}", name="trip_delete", methods={"POST"})
     */
    public function delete(Request $request, Trip $trip): Response
    {
    
        if ($this->isCsrfTokenValid('delete'.$trip->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trip);
            $entityManager->flush();
            $this->addFlash('success', 'Votre trajet a été supprimé');
        }

            return $this->redirectToRoute('trip_new');
    }


      /**
     * @Route("/test/{ville}", name="test")
     */
    public function test(Request $request)
    {       
            $city = $request->get('ville');
            $token = $this->getParameter('GoogleApiSK');
    
                $httpClient = HttpClient::create([], 6, 50);
                $response = $httpClient->request('GET', 'https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$city.'&components=country:fr&types=geocode&language=fr&key='. $token, 
                    ['headers' => [
                        'Authorization' => 'Bearer ' . $token,
                        'Content-type' =>'application/json',
                        ],
                    ]);

                $statusCode = $response->getStatusCode();
                $contentType = $response->getHeaders()['content-type'][0];
                $content = $response->getContent();

                return new JsonResponse(
                    $response->toArray(),
                    Response::HTTP_OK
               );
    }


          /**
     * @Route("/searchArrival/{ville}", name="searchArrival")
     */
    public function searchArrival(Request $request, TripRepository $tripRepository): Response
    {       
            $city = $request->get('ville');
            $response = new Response(json_encode($tripRepository->searchArrival($city)));
            $response->headers->set("Content-Type", "application/json");
                return $response;
    }



          /**
     * @Route("/searchDeparture/{ville}", name="searchDeparture")
     */
    public function searchDeparture(Request $request, TripRepository $tripRepository): Response
    {       
            $city = $request->get('ville');
            $response = new Response(json_encode($tripRepository->searchDeparture($city)));
            $response->headers->set("Content-Type", "application/json");
                return $response;
            return $response;
    }


    /**
     * @Route("/{id}/route_request", name="routeRequest", priority=2, methods={"GET"})
     */
    public function routeRequest(Trip $trip): Response
    {       

        $arrival = $trip->getArrival();
        $departure = $trip->getDeparture();
        $token = $this->getParameter('GoogleApiSK');

            $httpClient = HttpClient::create([], 6, 50);
            $response = $httpClient->request('GET', 'https://maps.googleapis.com/maps/api/directions/json?origin='.$departure.'&destination='.$arrival.'&language=fr&key='. $token, 
                ['headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Content-type' =>'application/json',
                    ],
                ]);

            $statusCode = $response->getStatusCode();
            $contentType = $response->getHeaders()['content-type'][0];
            $content = $response->getContent();
            //    dd("COUCOU ", $response->toArray());

            return new JsonResponse(
                $response->toArray(),
                Response::HTTP_OK
            );
    }
}
