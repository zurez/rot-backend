<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bearers;
use Input;
class AddController extends Controller
{

    public function bearer(Request $request)
    {
        try {
            Bearers::create(Input::except('_token'));
             return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
    
        }  
    }
}
