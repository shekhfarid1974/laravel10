<?php

namespace App\Models; // Correct namespace here

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Define the fillable attributes to allow mass assignment
    protected $fillable = ['description'];
}
