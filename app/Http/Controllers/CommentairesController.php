<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use App\Models\Post;
use App\Notifications\NouveauCommentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Post $post)
    {
        request()->validate([
            'commentaire'=>'required|max:255',
        ]);

        $comment = new Commentaires();

        $comment->commentaire = request('commentaire');
        $comment->user_id = auth()->user()->id;

        
       $post->commentaires()->save($comment);

       // Notificatio commentaire

       $post->user->notify(new NouveauCommentaire($post,auth()->user()));

        return redirect()->route('post.show',$post);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaires $commentaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaires $commentaires)
    {
        //
    }
}