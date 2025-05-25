<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        echo "ini adalah halaman dashboard dengan level admin";
    }
}
