<?php

namespace App\Models\Ecommerce\OrderItems;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItems extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;

    protected $guarded = ['id'];
}
