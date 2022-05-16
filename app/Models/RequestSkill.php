<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSkill extends Model
{
    protected $fillable = ['request_id','skill_id'];
    protected $table = "request_skill";

    public $incrementing = false;
    use HasFactory;

    public function skill()
    {
        return $this -> belongsTo(Skill::class,'skill_id');
    }

    public function request()
    {
        return $this -> belongsTo(Request::class, 'request_id');
    }
}
