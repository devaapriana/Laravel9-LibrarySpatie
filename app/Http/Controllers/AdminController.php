<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:exams.edit']);
    }

    public function tesPermission()
    {
        return "Hello ini hanya bisa dijalankan oleh admin";
    }
}
