<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable=[
    	'desc',
    	'content',
    	'img_url',
    	'status',
    	'student_id'

    ];
    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
//1 bai post se thuoc ve 1 student
    public function students (){
    	return $this->belongTo(Student::class, 'student_id', 'id');
    }

//function category the hien nhieu post, 1 post co nhieu category

    public function categories(){
    	return $this->belongToMany(category::class, 'category_post', 'post_id ', 'category_id');
    } 

    public function getStudentName()
    {
        $studentName = Student::find($this->student_id);
        if ($studentName) {
            return $studentName->name;
        }
        return null;
    }
}

