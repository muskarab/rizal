<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        $residences = Residence::get();

        return Inertia::render('Home', [
            'residences' => $residences,
        ]);
    }
}
