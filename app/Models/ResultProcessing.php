<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultProcessing extends Model
{
    //
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
