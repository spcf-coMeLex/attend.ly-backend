<?php

namespace App\Models\Branch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

use App\Models\Section\Section;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Branch extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "branches";

    protected $fillable = [
        'code',
        'name',
        'type'
    ];

    protected $hidden = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function sections()
    {
        return $this->hasMany(Section::class, 'branch_id');
    }


}
