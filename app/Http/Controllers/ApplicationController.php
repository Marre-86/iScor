<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();

        return view('applications.index')->with([
            'applications'  => $users
        ]);
    }
}
