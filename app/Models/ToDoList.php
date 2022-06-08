<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'list',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
