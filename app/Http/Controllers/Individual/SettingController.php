<?php

namespace App\Http\Controllers\Individual;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class SettingController extends Controller
{
    /**
     * Display settings of individual users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('account.individual.settings')->with('user', $user);
    }

    /**
     * Update settings of individual user.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        // Validate all inputs which entered by individual users..
        $this->validate($request,[
           'name' => 'required',
           'password' => 'required',
           'email' => 'required|email'
        ]);

        // Update inputs which entered by individual users.
        User::where('id', Auth::user()->id)->update($request->except(['_token']));

        return redirect()->route('individual.settings')->with('success', 'You have been updated your profile successfuly.');
    }
}
