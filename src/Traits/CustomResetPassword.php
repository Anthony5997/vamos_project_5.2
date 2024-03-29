<?php

namespace App\Traits;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

trait CustomResetPassword {
    public function verifications($user, $userEmail, $email, $passwordEncoder,$oldPassword, $newPassword ){
        if($userEmail === $email){
            $passwordValide = $passwordEncoder->isPasswordValid($user, $oldPassword);

            if($passwordValide){
                $this->resetPassword($passwordEncoder,$newPassword);
                $this->addFlash('success', 'Votre mot de passe a été mis à jour avec succès');
                
            }else{
                    $this->addFlash('error', 'Mauvais mot de passe');
                    
                }
        }else{
            $this->addFlash('error', 'L\'email est incorrecte');
        } 
        
    }
    public function resetPassword($passwordEncoder, $newPassword) {
        $user = $this->getUser();
        $newEncodedPassword = $passwordEncoder->encodePassword($user, $newPassword);
        $user->setPassword($newEncodedPassword);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();  
    }


    public function forgetPassword($passwordEncoder, $newPassword, $user) {

        $newEncodedPassword = $passwordEncoder->encodePassword($user, $newPassword);
        $user->setPassword($newEncodedPassword);
        $user->setResetToken(null);      
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();  
    }
}