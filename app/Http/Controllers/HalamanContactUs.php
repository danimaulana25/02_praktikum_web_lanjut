<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanContactUs extends Controller
{
    public function index()
    {
        return redirect('https://www.educastudio.com/contact-us');
    }
}
