<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'address'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
