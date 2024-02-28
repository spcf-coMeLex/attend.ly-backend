<?php

namespace App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Branch\Branch,
    App\Models\Department\Department;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class Subject extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table    = "subjects";
    
    protected $fillable = [
        'code',
        'name',
        'type',
        'department_id',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'department_id',
        'branch_id',
        'created_at',
        'updated_at'
    ];

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    protected function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
