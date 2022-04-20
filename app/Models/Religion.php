<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = ['village_id','family','male','female','religion'
];

public function villages()
{
    return $this->belongsTo(Village::class,'village_id');

}
}
