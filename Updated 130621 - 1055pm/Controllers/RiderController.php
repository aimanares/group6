<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function index()
    {
        return view('auth.riderLogin');
    }

    public function registration()
    {
        return view('auth.riderRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
      return Rider::create([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rider $rider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        //
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
         if (Auth::guard('rider')->attempt($credentials)) {
            return redirect()->intended('riderDashboard')->withSuccess('Signed in');
        }
  
        return redirect('riderLogin')->withErrors('Login details are not valid');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $users = Rider::where('email', '=', $request->input('email'))->first();
        if ($users === null) {
            // User does not exist
            $data = $request->all();
            $this->create($data);
            return redirect('riderDashboard')->withSuccess('You have signed-in');
        } else {
            // User exits
            return redirect('riderRegistration')->withErrors('Email have been used');
        }
         
        
    }

    public function dashboard()
    {
        if(Auth::guard('rider')->check()){
            // $orders = Order::latest()->paginate(5);
            // return view('rider.riderDisplay');

            $orders =  Order::all();
            return view('rider.riderDisplay',['orders' => $orders]);
        }
  
        return redirect('riderLogin')->withErrors('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('rider')->logout();
  
        return redirect('riderLogin');
    }
}
