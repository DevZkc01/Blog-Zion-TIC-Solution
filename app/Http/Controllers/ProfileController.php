<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $pseudo
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
            //dd($user);
        return view('profiles.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $pseudo)
    {
        return view('profiles.edit',compact('pseudo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        request()->validate([
            'image_profile'=>['image','max:1024'],
            'profession'=>['required','string','min:3'],
            'numero'=>['required','string','min:6'],
            'adresse'=>['required','string','min:3'],
            'lien_reseau'=>['required','string','min:3'],
        ]);   

        
        if (request('image_profile'))
            {
                $image_profile = request('image_profile')->store('profiles','public');
            }else{
                $image_profile = auth()->user()->profile->image_profile;
            }  
                 
                    auth()->user()->profile->update([
                        'image_profile'=>$image_profile,
                        'profession'=>$request->profession,
                        'numero'=>$request->numero,
                        'adresse'=>$request->adresse,
                        'lien_reseau'=>$request->lien_reseau,
                    ]);
        
                    
        return redirect()->route('profile.show',['user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}