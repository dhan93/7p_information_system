<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
      'id',
      'user_id',
      'date',
      'activities',
      'note',
      'course_id',
      'activities_done',
      'total_activities'
    ];

    public function users()
    {
      return $this->belongsTo(User::class);
    }
}
