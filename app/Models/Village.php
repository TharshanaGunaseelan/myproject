<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'villagename','villagenumber','male','female','population','family'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'village_id');
    
    }

    public function religions()
    {
        return $this->hasMany(Religion::class,'village_id');
    }

    public function ethnics()
    {
        return $this->hasMany(Ethnic::class,'village_id');
    }

    
}
