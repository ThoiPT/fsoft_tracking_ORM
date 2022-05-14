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

    protected $table = "skills";

    /* 1 Skill - Job nằm trong nhiểu bảng tin - 1 bảng tin chỉ chứa 1 skill - job */
    public function requests(){
        return $this->hasMany(Request::class, 'skill_id', 'id');
    }

    /* 1 Skill có nhiều Other Skill */
    public function requestSkills()
    {
        return $this->hasMany(RequestSkill::class,'skill_id','id');
    }
}
