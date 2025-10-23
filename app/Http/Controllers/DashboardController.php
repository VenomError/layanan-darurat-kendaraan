<?php

namespace App\Http\Controllers;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index', [
            'userCount' => User::where('role', UserRole::PUBLIC->value)->count(),
            'bengkelCount' => User::where('role', UserRole::BENGKEL->value)->count(),

        ]);
    }
}
