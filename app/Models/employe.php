<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone'
    ];
    protected $table = 'employe';

    public function experience(){
        return $this->hasMany(experience::class);
    }
}
