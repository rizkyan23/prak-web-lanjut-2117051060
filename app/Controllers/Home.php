<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',  
        ];
        return view('landing_page', $data);
    }
} 
