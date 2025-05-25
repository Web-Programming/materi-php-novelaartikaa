<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        echo "ini adalah halaman dashboard dengan level user";
        echo "<br>";
        echo auth()->user()->level;
        echo "<br>";
        echo auth()->user()->name;
        echo "<br>";
        echo auth()->user()->email;
    }
}
