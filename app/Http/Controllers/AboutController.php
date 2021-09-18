<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About us!";
        $paragraph = "This is just some random information!";
        $TestingArray = [
            [
                'TestA' => '123',
                'TestB' => 'ABC'
            ],
            [
                'TestA' => '321',
                'TestB' => 'CBA'
            ],
        ];
        return view("About", compact('title', 'paragraph', 'TestingArray'));
    }
}
