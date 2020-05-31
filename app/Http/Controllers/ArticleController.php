<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show() {
        return view('article.index');
    }

    public function detail() {
        return view('article.detail-post');
    }

    public function index() {
        return view('dashboard.artikel');
    }

    public function form() {
        return view('dashboard.form.form-artikel');
    }
}
