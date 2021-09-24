<?php

namespace App\Models\SectionOne;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionOne extends Model
{
    use HasFactory;
    use Uuids;
    use SoftDeletes;
    use Timestamp;

    protected $guarded = ['id'];

}
