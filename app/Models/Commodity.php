<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commodity extends Model
{
    use Uuids;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'sequence',
    ];

}
