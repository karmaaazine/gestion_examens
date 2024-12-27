<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register'); // Vue d'inscription
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        
        // Validation des données envoyées via le formulaire
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'city' => 'required|min_length[3]|max_length[100]',
            'tel' => 'required|numeric|min_length[10]|max_length[15]',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Si les données sont valides, les insérer dans la base de données
        $userModel = new UserModel();
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'email' => $this->request->getPost('city'),
            'email' => $this->request->getPost('tel'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hachage du mot de passe
        ]);

        return redirect()->to('/login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }
}
