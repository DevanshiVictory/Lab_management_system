<?php

namespace App\Controllers;
use App\Models\UserModel;

class LoginController extends BaseController {

    public function index() {
        return view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->getUser($username);

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            // Redirect based on role
            switch ($user['role']) {
                case 'admin':
                    return redirect()->to('/dashboard/admin');
                case 'doctor':
                    return redirect()->to('/dashboard/doctor');
                case 'patient':
                    return redirect()->to('/dashboard/patient');
                default:
                    return redirect()->to('/login');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Invalid Username or Password');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
