<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','status'
    ];

    protected $table = "Skills";

    /* 1 Skill - Job nằm trong nhiểu bảng tin - 1 bảng tin chỉ chứa 1 skill - job */

//    public function requests(): \Illuminate\Database\Eloquent\Relations\HasMany
//    {
//        return $this->hasMany(Request::class);
//    }
    public function request(){
        return $this->hasMany(Request::class, 'skill_id', 'id');
    }
}
