<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Support\Str;

class Employee extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "employees";

    protected $fillable = [
        'uId',
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'department_id',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'uId',
        'department_id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];
}
