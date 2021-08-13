<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityGroup extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'course_id',
      'title',
      'type'
    ];

    public function activities()
    {
      return $this->hasMany(Activity::class);
    }
}
