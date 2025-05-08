<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    public function classes()
    {
        return $this->hasMany(ClassModel::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
