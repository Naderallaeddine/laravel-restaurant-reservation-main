<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $offers = Offer::all();

        return view('master', compact('offers'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
