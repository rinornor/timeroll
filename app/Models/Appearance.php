<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appearance extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','date','date', 'time_in', 'time_out', 'duration'];  


    protected $appends = [
        
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
