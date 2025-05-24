<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Student extends Model
{
    use HasFactory;
        // Specify which fields can be mass-assigned
    protected $fillable = [
        'id',
        'name',
        'batch',
        'email',
        'contact',
        'password',
    ];

    // Optional: if you're using a non-auto-increment primary key
    public $incrementing = false;
    protected $keyType = 'int';
}
