<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
      protected $table = 'comments';

    protected $fillable=[
    	'content',
    	'student_id',
    	'post_id',
    	'status',

    ];

    public function post(){
    	return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function getStudentNameComment()
    {
        $studentNameComment = Student::find($this->student_id);
        if ($studentNameComment) {
            return $studentNameComment->name;
        }
        return null;
    }
    public function getPost_desc()
    {
        $post_desc = Post::find($this->post_id);
        if ($post_desc) {
            return $post_desc->desc;
        }
        return null;
    }
}
