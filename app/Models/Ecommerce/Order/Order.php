<?php

namespace App\Models\Ecommerce\Order;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Timestamp;

    protected $guarded = ['id'];

    protected $table = 'orders';

    protected $dates = ['date_order'];

    protected $fillable = ['date_order', 'status', 'admin_id'];

    public function statusDesc(): string
    {
        $desc =  "";
        switch ($this->status) {
            case 'PEN' :
                $desc = 'PENDENTE';
                break;
            case 'APR' :
                $desc = 'APROVADO';
                break;
            case 'CAN' :
                $desc = 'CANCELADO';
                break;
        }

        return $desc;
    }

}
