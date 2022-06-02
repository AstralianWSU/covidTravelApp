<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListHotspot extends Model
{
    use HasFactory;
    protected $table = 'hotspot';
    protected $fillable = [
        "name"
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function history(){
        return $this->belongsTo(History::class);
    }
}
