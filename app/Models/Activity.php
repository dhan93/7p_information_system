<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'activity_group_id',
      'title'
    ];

    public function activityGroup()
    {
      return $this->belongsTo(ActivityGroup::class);
    }
}
