<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD

=======
>>>>>>> eb939a3 (8 octobar 2024)
class Category extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['title'];
    

    public function user(){
        $this->belongsTo(User::class);
    }
=======
    protected $fillable = ['name'];
>>>>>>> eb939a3 (8 octobar 2024)
}
