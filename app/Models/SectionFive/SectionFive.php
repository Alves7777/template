<?php

namespace App\Models\SectionFive;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionFive extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;
    use Uuids;

    protected $guarded = ['id'];
}
