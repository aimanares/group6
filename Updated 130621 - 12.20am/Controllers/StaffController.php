<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.staffLogin');
    }

    public function registration()
    {
        return view('auth.staffRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
      return Staff::create([
        'name' => $data['name'],
        'cafe_id' => $data['cafe_id'],
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
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
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
         if (Auth::guard('staff')->attempt($credentials)) {
            return redirect()->intended('staffDashboard')->withSuccess('Signed in');
        }
  
        return redirect('staffLogin')->withErrors('Login details are not valid');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $users = Staff::where('email', '=', $request->input('email'))->first();
        if ($users === null) {
            // User does not exist
            $data = $request->all();
            $this->create($data);
            return redirect('staffDashboard')->withSuccess('You have signed-in');
        } else {
            // User exits
            return redirect('staffRegistration')->withErrors('Email have been used');
        }
         
        
    }

    public function dashboard()
    {
        if(Auth::guard('staff')->check()){
            return view('staffDashboard');
        }
  
        return redirect('staffLogin')->withErrors('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('staff')->logout();
  
        return redirect('staffLogin');
    }
}
