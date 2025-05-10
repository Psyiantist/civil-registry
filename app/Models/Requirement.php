<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequirementDescription;

class Requirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];
}
    
