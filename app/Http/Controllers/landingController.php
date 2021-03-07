<?php

namespace App\Http\Controllers;

use App\service;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\intrested;
use Illuminate\Http\Request;

class landingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $services = service::all();
     
        $times = intrested::all();


        return view('Users.index', compact('services', 'times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        $user = new user();
        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        $user->mobile   = $request->get('mobile');
        $user->service  = $request->get('service');
        $user->time     = $request->get('time');
        $user->save();


        return view('Users.index');
        //   return $this->ShowServices();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
