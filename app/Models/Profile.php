<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_profile',
        'profession',
        'numero',
        'adresse',
        'lien_reseau'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function getImage()
    {
        if($this->image_profile)
        {
            $chemin_image = $this->image_profile;
        }else{
            $chemin_image = 'avatars/default.jpg';
        }
        return "/storage/". $chemin_image;
    }
}