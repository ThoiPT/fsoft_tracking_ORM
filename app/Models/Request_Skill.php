<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Skill extends Model
{
    protected $fillable = ['request_id','skill_id'];
    protected $table = "Request__Skills";
    use HasFactory;

    public function skills()
    {
        return $this -> belongsTo(Skill::class,'skill_id');
    }

    public function request()
    {
        return $this -> belongsTo(Request::class, 'request_id');
    }
}
