<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
      'schedule_id',
      'title',
      'attachment',
      'type'
    ];

    public function schedule()
    {
      return $this->belongsTo(Schedule::class);
    }
}
