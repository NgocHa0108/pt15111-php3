<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable=[
    	'name',
    	'phone',
    	'age',
    	'gender',

    ];

    // function 1 sv cos nhieu bai post
    public function posts(){
    	return $this->hasMany(Post::class, 'student-id', 'id');
    }
}
 