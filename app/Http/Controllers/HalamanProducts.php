<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProducts extends Controller
{
    public function med(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function rsb(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function kss(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}

