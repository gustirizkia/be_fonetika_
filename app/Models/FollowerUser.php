<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowerUser extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function scopeFilterByUserName($query, $user_name)
    {
        return $query->whereHas("user", function ($query) use ($user_name) {
            $query->where("username", $user_name);
        });
    }
}
