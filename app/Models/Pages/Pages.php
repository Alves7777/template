<?php

namespace App\Models\Pages;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Uuids;
    use Timestamp;

    protected $guarded = ['id'];

}
