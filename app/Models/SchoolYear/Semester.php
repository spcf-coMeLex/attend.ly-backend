<?php

namespace App\Models\SchoolYear;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "semesters";

    protected $fillable = [
        'school_year_id',
        'semester',
        'enrollment_status'
    ];

    protected $hidden = [
        'id',
        'school_year_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
