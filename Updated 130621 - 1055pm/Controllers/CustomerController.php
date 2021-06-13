<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.customerLogin');
    }

    public function registration()
    {
        return view('auth.customerRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
      return Customer::create([
        'name' => $data['name'],
        'address' => $data['address'],
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
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
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
         if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended('customerDashboard')->withSuccess('Signed in');
        }
  
        return redirect('customerLogin')->withErrors('Login details are not valid');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $users = Customer::where('email', '=', $request->input('email'))->first();
        if ($users === null) {
            // User does not exist
            $data = $request->all();
            $this->create($data);
            return redirect('customerDashboard')->withSuccess('You have signed-in');
        } else {
            // User exits
            return redirect('customerRegistration')->withErrors('Email have been used');
        }
         
        
    }

    public function dashboard()
    {
        if(Auth::guard('customer')->check()){
            return view('customer.customerHome');
        }
  
        return redirect('customerLogin')->withErrors('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('customer')->logout();
  
        return redirect('customerLogin');
    }
}
