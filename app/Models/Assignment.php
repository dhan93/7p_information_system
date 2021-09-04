<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
      'schedule_id',
      'title', 
      'status'
    ];

    public function Users()
    {
      return $this->belongsToMany(User::class)->withPivot('id')->withTimestamps();
    }

    public function Schedule()
    {
      return $this->belongsTo(Schedule::class);
    }
}
