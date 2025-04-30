<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
     protected $fillable = [
        'first_name', 
        'last_name',
        'Gender',
        'Email', 
        'Tel',
        'Address',
        'Building',
        'Content',
        'Detail'
     ];
}
