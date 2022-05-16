<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVitae extends Model
{
    protected $fillable = [
      'name',
      'phone',
      'address',
      'file',
      'status',
      'request_id'
    ];
    use HasFactory;
}
