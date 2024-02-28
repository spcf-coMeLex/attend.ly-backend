<?php

namespace App\Models\Section;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class SectionSubject extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table      = "section_subjects";

    protected $fillable = [
        'section_id',
        'code',
        'subject_id',
        'employee_id'
    ];

    protected $hidden = [
        'id',
        'section_id',
        'subject_id',
        'employee_id',
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
