<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVitae extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'phone',
      'address',
      'file',
      'status',
      'request_id'
    ];
    protected $table = "cvitaes";

    public function request()
    {
        return $this -> belongsTo(Request::class,'request_id');
    }



}
