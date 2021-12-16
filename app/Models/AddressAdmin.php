<?php

namespace App\Models;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressAdmin extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;

    protected $table = 'address_admins';

    protected $fillable = ['logradouro','complement','number','cep','city','state'];
}
