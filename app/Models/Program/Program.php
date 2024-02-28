<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Department\Department,
    App\Models\Branch\Branch;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "programs";

    protected $fillable = [
        'code',
        'name',
        'type',
        'duration',
        'department_id',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'department_id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
