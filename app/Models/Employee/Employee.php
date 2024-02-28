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
        'principal_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'age',
        'department_id',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'principal_id',
        'department_id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
