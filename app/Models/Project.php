<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function typology(){
       return $this->belongsTo(Typology::class);
    }
}
