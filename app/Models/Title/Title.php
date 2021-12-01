<?php

namespace App\Models\Title;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title extends Model
{
    use HasFactory;
    use Uuids;
    use Timestamp;
    use SoftDeletes;

    protected $guarded = ['id'];
}
