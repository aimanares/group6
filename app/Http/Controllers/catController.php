<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about () {
        return view('about');
        }
        
        public function team () {
        return view('team');
        }
        public function services () {
        $services = array(
        'Service 1',
        'Service 2'
        );
        return view('services', compact('services'));

       

        
       
            } 
            
            
          

        } 