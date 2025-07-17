<?php

namespace App\Controllers;

use App\Core\Abstract\AbstractController;
use App\Entities\User;
use App\Services\TransactionService;
use App\Services\CompteService;
use App\Core\App;
use App\Core\Paginator;

class UserController extends AbstractController
{
    private TransactionService $transactionService;
    private CompteService $compteService;

    public function __construct()
    {
        parent::__construct();
       
        $this->layout = 'base.layout.php'; 
        $this->transactionService = App::getDependencie('TransactionService');
        $this->compteService = App::getDependencie('CompteService');
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

    public function nouveauCompte(): void
    {
        $userData = $this->session->get('user');
       
        if (!$userData) {
            $this->redirect('/');
            return;
        }
        
        $user = $userData['user']; 
        $compte = $userData['compte'];
        $message = '';
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numeroTelephone = $_POST['numero_telephone'] ?? '';
            $solde = floatval($_POST['solde'] ?? 0);

            if (empty($numeroTelephone)) {
                $error = 'Le numéro de téléphone est requis';
            } elseif ($solde < 0) {
                $error = 'Le solde ne peut pas être négatif';
            } else {
                try {
                    $nouveauCompte = $this->compteService->creerCompteSecondaire(
                        $numeroTelephone, 
                        $user->getId(), 
                        $solde
                    );
                    
                    if ($nouveauCompte) {
                        $message = 'Compte secondaire créé avec succès !';
                    } else {
                        $error = 'Erreur lors de la création du compte';
                    }
                } catch (\Exception $e) {
                    $error = $e->getMessage();
                }
            }
        }

        $this->render('client/nouveau-compte', [
            'user' => $user,
            'compte' => $compte,
            'message' => $message,
            'error' => $error
        ]);
    }
}