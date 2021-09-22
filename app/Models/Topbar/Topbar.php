<?php

namespace App\Models\Topbar;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topbar extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Uuids;

    protected $guarded = ['id'];

}
