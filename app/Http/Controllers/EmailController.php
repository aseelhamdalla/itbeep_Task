<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

class EmailController extends Controller
{
  public function create()
  {

    $users = User::all();
    foreach ($users as $user) {
      $id = $user->id;
      $email = $user->email;
      $name = $user->name;
      $mobile = $user->mobile;
      $service = $user->service;
      $time = $user->time;
    }
    return view('email', compact('users', 'id', 'email', 'service', 'name', 'mobile', 'time'));
  }

  public function sendEmail(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'mobile' => 'required',
      'name' => 'required',
      'service' => 'required',
      'time' => 'required'
    ]);

    $users = User::all();
    foreach ($users as $user) {
      $id = $user->id;
      $email = $user->email;
      $name = $user->name;
      $service = $user->service;
      $time = $user->time;
    }

    $data = [
      'mobile' => $request->mobile,
      'name' => $request->name,
      'email' => $request->email,
      'service' => $request->service,
      'time' => $request->time
    ];

    Mail::send('email-template', $data, function ($message) use ($data) {
      $message->to($data['email']);
    });

    return back()->with(['message' => 'Email successfully sent!']);
  }

  public function services()
  {

    $users = User::all();
    foreach ($users as $user) {
      $id = $user->id;
      $email = $user->email;
      $name = $user->name;
      $service = $user->service;
      $time = $user->time;
    }

    return view('email-template', compact('users', 'id', 'email', 'service', 'name', 'time'));
  }
}
