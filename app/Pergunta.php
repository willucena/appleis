<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Pergunta extends Model
{
    public function pergunta(){
        return $this->belongsTo(Pergunta::class);
    }
}
