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
    protected $table = "Requests";

    public function skills()
    {
        return $this ->belongsTo(Skill::class, 'skill_id');
    }


    public function request_skills()
    {
        return $this -> hasMany(Request_Skill::class,'request_id','id');
    }
}
