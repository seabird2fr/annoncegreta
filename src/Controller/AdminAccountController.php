<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminAccountController extends AbstractController
{
    /**
     * @Route("/admin/login", name="admin_account_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

    	$error = $authenticationUtils->getLastAuthenticationError();



        return $this->render('admin/account/login.html.twig', [
        	'errorLogin'=> $error,
          
        ]);
    }


      /**
     * @Route("/admin/logout", name="admin_account_logout")
     */
    public function logout()
    {
       
    }

}
