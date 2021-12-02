<?php

namespace App\Models\Ecommerce\Address;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;

    protected $table = 'addresses';

    protected $fillable = ['logradouro','complement','number','cep','city','state'];
}
