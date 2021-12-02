<?php

namespace App\Models\Ecommerce\UserEcommerce;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class UserEcommerce extends Model implements Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;

//    public function __construct()
//    {
//        $this->middleware('auth:ecommerce');
//    }

    protected $table = 'user_ecommerces';

    protected $fillable = ['email', 'login', 'password', 'name'];

    protected $guard = 'ecommerce';

    public function getAuthIdentifierName()
    {
        return $this->getKey();
    }
    public function getAuthIdentifier()
    {
        return $this->login;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getRememberToken()
    {

    }
    public function setRememberToken($value)
    {

    }
    public function getRememberTokenName()
    {

    }

//    protected function guard()
//    {
//        return Auth::guard('ecommerce')->user();
//    }


}
