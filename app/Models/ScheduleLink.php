<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleLink extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'schedule_id',
      'channel',
      'link'
    ];

    public function schedule()
    {
      return $this->belongsTo(Schedule::class);
    }
}
