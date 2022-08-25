<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studenthomeworks extends model
{
    use HasFactory;

    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo(students::class, 'students_id');
    }

    public function homework()
    {
        return $this->hasMany(homework::class, 'homework_id');
    }



}
