<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(teacher::class, 'class', 'classroomName');
    }

    public function students()
    {
        return $this->hasMany(students::class);
    }

}
