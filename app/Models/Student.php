<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'date_of_birth',
        'gender',
        'mobile_number',
        'address',
        'department_id',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
