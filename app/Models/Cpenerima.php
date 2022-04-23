<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpenerima extends Model
{
    use HasFactory;
    protected $filable =['name','provinsi','kabupaten','kecamatan'];

    public function todos(){
        return $this-> hasMany(Todo::class);
    }
    public function user(){
        return $this-> BelongsTo(user::class);
    }
}
