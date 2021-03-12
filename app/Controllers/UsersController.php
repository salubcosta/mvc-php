<?php

namespace App\Controllers;

class UsersController extends \CODE\Controller
{
    // public function handler()
    // {
    //     return self::class;
    // }
    public function index()
    {
        // $this->render(['nome'=>'salumao'], 'users/index');
        $user = $this->model->get();
        $this->render($user);
    }

    public function create()
    {
        return 'create - usuários';
    }
}