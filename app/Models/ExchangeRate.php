<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExchangeRate extends Model
{
    use Uuids;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'date',
        'selling_price',
        'purchase_price',
    ];
}
