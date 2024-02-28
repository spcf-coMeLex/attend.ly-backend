<?php

namespace App\Models\Section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Program\Program;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Support\Str;

class Section extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "sections";

    protected $fillable = [
        'code',
        'year_level',
        'semester',
        'branch_id',
        'department_id',
        'program_id'
    ];

    protected $hidden = [
        'id',
        'branch_id',
        'department_id',
        'program_id',
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

    protected function program() {
        return $this->belongsTo(Program::class, 'program_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
