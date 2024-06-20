<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'employe_id',
        'company',
        'designation',
        'start_date',
        'end_date',
        'experiences'
    ];
    protected $table = 'experience';

    public function details(){
        return $this->belongsTo(employe::class);
    }
}
