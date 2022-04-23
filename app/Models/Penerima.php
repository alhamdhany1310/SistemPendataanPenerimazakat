<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $filable =['pen_id','usia_id','pek_id','sta_id','ket_id'];
    public function user(){
        return $this-> BelongsTo(user::class);
    }
    public function cpenerimas(){
        return $this-> BelongsTo(Cpenerima::class);
    }
    public function todos(){
        return $this-> BelongsTo(Todo::class);
    }
}
