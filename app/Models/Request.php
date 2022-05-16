<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;


class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'experience',
        'level',
        'numRecruit',
        'open',
        'close',
        'description',
        'status',
        'user_id',
        'skill_id',
        'group_id'
    ];
    protected $table = "requests";
    public $incrementing = false;
    public function skill()
    {
        return $this ->belongsTo(Skill::class, 'skill_id');
    }


    public function requestSkills()
    {
        return $this -> hasMany(RequestSkill::class,'request_id','id');
    }

    public function user()
    {
        return $this -> belongsTo(User::class,'user_id');
    }
}
