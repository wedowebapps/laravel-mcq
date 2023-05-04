<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $table = "questions";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'question_name',
        'question_type',
        'choice_1',
        'choice_2',
        'choice_3',
        'choice_4',
        'answer'
    ];
}
