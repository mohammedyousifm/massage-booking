<?php

namespace App\Http\Controllers;

use App\Models\Bookink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function error()
    {
        return view('errors.404');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function successBooking(Request $request)
    {
        return view('success.booking');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function successEmail(Request $request)
    {
        return view('success.email');
    }
}
