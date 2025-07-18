<?php

namespace App\Controllers;

use App\Core\Abstract\AbstractController;
use App\Entities\User;
use App\Services\TransactionService;
use App\Services\CompteService;
use App\Core\App;
use App\Core\Paginator;
use App\Core\Validator;
use App\Entities\Compte;


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
        
        $this->render('client/transactions/transactions', [
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

    public function acountsList()
    {
        $userData = $this->session->get('user');
        $user = $userData['user'] ?? null;
        $compte = $userData['compte'] ?? null;
        $accounts = $this->compteService->getComptesSecondaires($user->getId());
       
        $this->render("client/compte/index", [
            'user' => $user,
            'compte' => $compte,
            'accounts' => $accounts,
           
        ]);
    }

    public function createSecondaryAccount()
    {
        $userData = $this->session->get('user');
        $user = $userData['user'] ?? null;
        $compte = $userData['compte'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
           $rules = [
                'telephone' => ['required', 'length:9', 'phone'],
                'solde' => ['number'],
            ];
        
            $validator = Validator::make($_POST, $rules);
          
            if ($validator->validate())
            {
                try {
                  $account = new Compte(
                    0,
                    $_POST['solde'],
                    'Secondaire',
                    $_POST['telephone']
                  );
                $account->setUser($user);
                $compte = $this->compteService->creerCompteSecondaire($account);
                    if ($compte) {
                        $this->session->set('success', 'Compte secondaire créé avec succès !');
                        $this->redirect('/client/acountsList');
                    } else {
                        $this->session->set('error', 'Erreur lors de la création du compte');
                    }
                } catch (\Throwable $th) {
                    echo "Erreur lors de la création du compte : " . $th->getMessage();
                    die;
                }
            }

        }

        $this->render("client/compte/create", [
            'user' => $user,
            'compte' => $compte
        ]);
    }
}