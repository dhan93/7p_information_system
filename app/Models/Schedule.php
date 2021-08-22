<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
      'course_id',
      'time',
      'topic',
      'sub_topic',
      'lecturer',
    ];

    public function course()
    {
      return $this->belongsTo(Course::class);
    }

    public function modules()
    {
      return $this->hasMany(Module::class);
    }

    public function scheduleLinks()
    {
      return $this->hasMany(ScheduleLink::class);
    }
}
