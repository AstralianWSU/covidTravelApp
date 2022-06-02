<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = "history";
    protected $fillable = [
        "user_id",
        "location_id",
        "date__visit"
    ];

    public function user(){
        return $this->hasMany(User::class, "id", "user_id");
    }
    public function locations(){
        return $this->hasMany(ListHotspot::class, "id", "location_id");
    }
}
