<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\InscriptionMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PostRequestForm;
use Illuminate\Notifications\DatabaseNotification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function creerpost()
    {
        //dd('ok');
        return view('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequestForm $request)
    {
        request()->validate([
            'titre'=>['required','string','min:2','max:60'],
            'description'=>['required','string','min:5'],
            'image'=>['image','max:1024'],
        ]);

            if($request->image!=null)
            {
                $sauve_image = request('image')->store('images_des_posts','public');
            }else{
                $sauve_image = null;
            }


        auth::user()->post()->create([
            'titre'=>$request->titre,
            'description'=>$request->description,
            'image'=>$sauve_image,
        ]);

        //$share_user = User::find(auth::user()->email);
        
       /* $rec_mail = User::all();

        foreach($rec_mail as $mon_mail)
            {
                Mail::to($mon_mail->email)->send(new InscriptionMail());
            }*/

            //Mail::to('zionblog@gmail.com')->send(new InscriptionMail($share_user));
            
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }


    public function notification(Post $post, DatabaseNotification $notification)
    {
        $notification->markAsRead();
        return view('posts.show',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //$this->authorize('update',$post);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequestForm $request, Post $post)
    {
        request()->validate([
            'titre'=>['required','string','min:2','max:60'],
            'description'=>['required','string','min:5'],
            'image'=>['image','max:1024'],
        ]);

            if($request->image!=null)
            {
                $sauve_image = request('image')->store('images_des_posts','public');
            }else{
                $sauve_image = $post->image;
            }

        $post->update([
            'titre'=>$request->titre,
            'description'=>$request->description,
            'image'=>$sauve_image,
        ]);
        
        return view('posts.show',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post)
    {
        //$this->authorize('delete',$post);
        $post->delete();
        return view('acceuils.index');
    }
}