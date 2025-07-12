<?php

namespace App\Controllers;

use App\Core\Abstract\AbstractController;
use App\Entities\User;

class UserController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
       
        $this->layout = 'base.layout.php'; 
    }

    public function index(): void
    {
      
        $user = $this->session->get('user');
       
        if (!$user) {
            $this->redirect('/');
            return;
        }
        
        $this->render('client/dashboard', [
            'user' => $user
        ]);
    }
}