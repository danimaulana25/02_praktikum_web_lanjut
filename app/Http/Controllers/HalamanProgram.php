<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgram extends Controller
{
    public function karir(){
        return redirect('https://www.educastudio.com/program/karir');
    }

    public function magang(){
        return redirect('https://www.educastudio.com/program/magang');
    }

    public function kunjunganIndustri(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }
}
