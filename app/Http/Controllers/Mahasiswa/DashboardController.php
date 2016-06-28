<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function home()
    {
        return 'Welcome Mahasiswa';
    }
}
