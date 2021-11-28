<?php

namespace App\Models\Score;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    use Uuids;
    use Timestamp;

    protected $guarded = ['id'];
}
