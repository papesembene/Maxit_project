<?php

namespace App\Controllers;

use App\Core\Abstract\AbstractController;
use App\Entities\User;

class UserController extends AbstractController
{
    public function index(): void
    {
       
        
        // Rendre la vue du dashboard
        $this->render('client/dashboard', [
          
        ]);
    }
}