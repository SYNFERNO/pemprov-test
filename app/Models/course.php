<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['course', 'mentor', 'title'];

    public function userCourse()
    {
        return $this->hasMany(userCourse::class, 'id_course');
    }
}
