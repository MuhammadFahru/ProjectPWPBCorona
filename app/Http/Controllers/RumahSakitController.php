<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index() {
        return view('dashboard.rumah-sakit');
    }

    public function form() {
        return view('dashboard.form.form-rs');
    }
}
