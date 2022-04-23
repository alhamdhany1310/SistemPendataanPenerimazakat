<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['name_id', 'g_id', 'u_id','s_id','keterangan','user_id'];

    public function user(){
        return $this-> BelongsTo(user::class);
    }
    public function cpenerimas(){
        return $this-> BelongsTo(Cpenerima::class);
    }
    public function penerimas(){
        return $this-> hasMany(Todo::class);
    }
}
