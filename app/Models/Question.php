<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
      'id', 
      'exam_id',
      'text',
      'answer'
    ];

    public function options()
    {
      return $this->hasMany(Question::class);
    }

    public function users()
    {
      return $this->belongsToMany(User::class);
    }
}
