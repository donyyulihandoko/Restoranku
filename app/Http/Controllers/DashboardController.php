<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request): Response
    {
        if($request->user()->hasRole(['super_admin']))
        {
            return response()->view('super-admin.dashboard');   
        }
        else{
            return abort(404, "Halaman tidak ada");
        }
    }
}
