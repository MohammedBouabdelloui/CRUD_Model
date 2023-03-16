<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $fillable=['email','password','city'];

    public function Commend() {
        return $this->hasMany(commend::class , 'clients_id');
    }
    public function scopeDated($query){
        return $query->where('id','>',1); 
    }
}
