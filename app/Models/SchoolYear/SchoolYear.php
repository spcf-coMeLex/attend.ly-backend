<?php

namespace App\Models\SchoolYear;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch;

class SchoolYear extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $table = "school_years";
    protected $fillable = [
        'branch_id',
        'school_year',
        'status'
    ];

    protected $hidden = [
        'id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function branch(){
        return $this->belongsTo(Branch::class, 'branch_id');
    }


    protected function semester(){
        return $this->hasMany(Semester::class, 'school_year_id');
    }
}
