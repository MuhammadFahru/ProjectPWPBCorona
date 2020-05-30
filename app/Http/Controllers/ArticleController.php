<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show() {
        return view('artikel');
    }

    public function index() {
        return view('dashboard.artikel');
    }

    public function form() {
        return view('dashboard.form.form-artikel');
    }
}
