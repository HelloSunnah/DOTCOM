<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectViewController extends Controller
{
public function frontpage(){
    return view('Frontend.master');
}
}
