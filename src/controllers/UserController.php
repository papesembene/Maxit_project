<?php

namespace App\Controllers;

use App\Core\Abstract\AbstractController;
use App\Entities\User;
use App\Services\TransactionService;
use App\Core\App;
use App\Core\Paginator;

class UserController extends AbstractController
{
    private TransactionService $transactionService;

    public function __construct()
    {
        parent::__construct();
       
        $this->layout = 'base.layout.php'; 
        $this->transactionService = App::getDependencie('TransactionService');
    }

    public function index(): void
    {
        $userData = $this->session->get('user');
       
        if (!$userData) {
            $this->redirect('/');
            return;
        }
        
        $user = $userData['user']; 
        $compte = $userData['compte']; 
        
        $transactions = $this->transactionService->getLastTransactions($compte->getId(), 10);
        
        $this->render('client/dashboard', [
            'user' => $user,
            'compte' => $compte,
            'transactions' => $transactions
        ]);
    }

    public function transactions(): void
    {
        $userData = $this->session->get('user');
       
        if (!$userData) {
            $this->redirect('/');
            return;
        }
        
        $user = $userData['user']; 
        $compte = $userData['compte']; 
        
       
        $allTransactions = $this->transactionService->getAllTransactions($compte->getId());
        
      
        $result = Paginator::paginate($allTransactions, 6);
        
        $this->render('client/transactions', [
            'user' => $user,
            'compte' => $compte,
            'transactions' => $result['items'],
            'pagination' => $result
        ]);
    }
}