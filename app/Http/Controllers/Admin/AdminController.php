<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;


class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}
