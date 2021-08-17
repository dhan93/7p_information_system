<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'schedule_id',
      'total_question',
      'due_date',
      'category'
    ];

    public function users()
    {
      return $this->belongsToMany(User::class);
    }

    public function questions()
    {
      return $this->hasMany(Question::class);
    }
}
