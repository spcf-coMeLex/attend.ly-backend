<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch;

class Laboratory extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $table = "laboratories";

    protected $fillable = [
        'code',
        'name',
        'education_type',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
