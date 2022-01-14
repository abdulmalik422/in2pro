<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller
{
    public function index()
    {
        $data['heading'] = 'Welcome';
        $data['page_title'] = SITE_TITLE.' | '.$data['heading'];

        echo view('welcome');
        echo view('component/footer', $data);
    }

    public function login()
    {
        $data['heading'] = 'Log In';
        $data['page_title'] = SITE_TITLE.' | '.$data['heading'];

        //        helper(['form']);

        echo view('component/header', $data);
        echo view('user/login');
        echo view('component/footer', $data);
    }

    public function signup()
    {
        $data['heading'] = 'Sign up';
        $data['page_title'] = SITE_TITLE.' | '.$data['heading'];

//        helper(['form']);

        echo view('component/header', $data);
        echo view('user/signup');
        echo view('component/footer', $data);
    }

    public function signupVerification()
    {
        $data['heading'] = 'Sign up';
        $data['page_title'] = SITE_TITLE.' | '.$data['heading'];

//        helper(['form']);

        echo view('component/header', $data);
        echo view('user/signup_verification');
        echo view('component/footer', $data);
    }

    public function resetPassword()
    {
        $data['heading'] = 'Sign up';
        $data['page_title'] = SITE_TITLE.' | '.$data['heading'];
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}