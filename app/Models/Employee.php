<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'email',
        'phone_no',
        'contract_start_date',
        'contract_end_date',

    ];
}
