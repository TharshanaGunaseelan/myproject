<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethnic extends Model
{
    protected $fillable = ['village_id','family','male','female','ethnic'
];

public function villages()
{
    return $this->belongsTo(Village::class,'village_id');

}
}
