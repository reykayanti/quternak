<?php

namespace App\Controllers;
use App\Models\userModel;

class Home extends BaseController
{
    public $mUsers;

    protected $helpers = ['html', 'text', 'form', 'auth'];

    public function __construct()
    {
        $this->mUsers      = new userModel();
    }

    public function index()
    {
        
        return view('home');
    }

}
