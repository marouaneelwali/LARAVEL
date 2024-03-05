<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
       
    public function Form(Request $request)
    {
        if ($request->isMethod('post')) {
            $nb1 = $request->input('nb1');
            $nb2 = $request->input('nb2');
            $nb3 = $request->input('nb3');
            $nb4 = $request->input('nb4');
            $loginValue = session('login');
            $s = 0;
            if ($nb1 == $loginValue[0]) {
                $s++;
            } elseif (in_array($nb1, $loginValue)) {
                $nb1 = "kain walakin maxi fblasto";
            } else {
                $nb1 = "invalide";
            }
    
            if ($nb2 == $loginValue[1]) {
                $s++;
            } elseif (in_array($nb2, $loginValue)) {
                $nb2 = "kain walakin maxi fblasto";
            } else {
                $nb2 = "invalide";
            }
    
            if ($nb3 == $loginValue[2]) {
                $s++;
            } elseif (in_array($nb3, $loginValue)) {
                $nb3 = "kain walakin maxi fblasto";
            } else {
                $nb3 = "invalide";
            }
    
            if ($nb4 == $loginValue[3]) {
                $s++;
            } elseif (in_array($nb4, $loginValue)) {
                $nb4 = "kain walakin maxi fblasto";
            } else {
                $nb4 = "invalide";
            }
    
            return view('User', [
                "nbe" => $s,
                'nb1' => $nb1,
                'nb2' => $nb2,
                'nb3' => $nb3,
                'nb4' => $nb4,
                "ses1" => $loginValue[0],
                "ses2" => $loginValue[1],
                "ses3" => $loginValue[2],
                "ses4" => $loginValue[3]
            ]);
        } else {
            $loginValues = [rand(1, 9), rand(1, 9), rand(1, 9), rand(1, 9)];
            $request->session()->put('login', $loginValues);
    
            return view('User', [
                "nbe" => '',
                'nb1' => "",
                'nb2' => "",
                'nb3' => "",
                'nb4' => "",
                'ses1' => $loginValues[0],
                'ses2' => $loginValues[1],
                'ses3' => $loginValues[2],
                'ses4' => $loginValues[3]
            ]);
        }
    }
    
    



    
}
