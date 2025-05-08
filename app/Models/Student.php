<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
