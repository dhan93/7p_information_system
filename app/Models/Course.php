<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'name',
      'short_name',
      'generation',
      'is_finished',
    ];

    public function users ()
    {
      return $this->belongsToMany(User::class);
    }

    public function schedules()
    {
      return $this->hasMany(Schedule::class);
    }
}
