<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function seller()
    {
        return $this->belongsTo(User::class,'seller_id','id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class,'buyer_id','id');
    }
    public function disputer()
    {
        return $this->belongsTo(User::class,'disputer_id','id');
    }
    public function conversation()
    {
        return $this->hasMany(Conversation::class);
    }

}
