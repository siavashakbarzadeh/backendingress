<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'photo','mint_address','category','user_id','description',"price"
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
