<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch;

class Building extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $table    = "buildings";
    
    protected $fillable = [
        'code',
        'name',
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
