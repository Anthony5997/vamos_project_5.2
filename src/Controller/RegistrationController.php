<?php

namespace App\Controller;

use App\Entity\TravelPreferences;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Form\RegistrationFormType;
use App\Repository\UserExperienceLevelRepository;
use App\Repository\UserRepository;
use App\Security\Authenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Validator\Constraints\DateTime;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, Authenticator $authenticator, UserExperienceLevelRepository $userExperienceLevelRepository): Response
    {
        $user = new User();
        $travelPreferences = new TravelPreferences();
        $vehicule = new Vehicule();
        $vehicule->setVehiculePicture('default_car_picture.jpg');
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $date = new \DateTime();
        $experience = $userExperienceLevelRepository->findOneBy(array('experience_level' => "Débutant"));

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData(),
                )
            );
            $user->setRoles(['ROLE_USER']);
            $user->setFirstName($form->get('firstname')->getData());
            $user->setProfileCompleted(false);
            $user->setTripsMade(0);
            $user->setCreatedAt($date);
            $user->setUserExperience($experience);
            $user->setProfile_Picture("default_profile_picture.jpg");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($travelPreferences, $vehicule);
            $user->setTravelPreferences($travelPreferences);
            $user->setVehicule($vehicule);
            $entityManager->persist($user);
            $entityManager->flush();
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
