<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'date',
      'activities',
      'note',
      'course_id'
    ];

    public function users()
    {
      return $this->belongsTo(User::class);
    }
}
