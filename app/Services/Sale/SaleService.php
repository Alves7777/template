<?php

namespace App\Services\Sale;

use App\AbstractView\AbstractView;
use App\Models\Admin;
use App\Models\Ecommerce\Order\Order;
use App\Models\Ecommerce\OrderItems\OrderItems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SaleService
{

    public function finishSale($prods = [], Admin $userAdmin): array
    {
        try {
            DB::beginTransaction();
            $order = new Order();
            $dateNow = new \DateTime();
            $order->date_order = $dateNow->format('Y-m-d H:i:s');
            $order->status = "PEN";
            $order->admin_id = $userAdmin->id;
            $order->save();

            foreach ($prods as $p) {
                $items = new OrderItems();
                $items->quantity = 1;
                $items->value = $p->value;
                $items->date_item = $dateNow->format('Y-m-d H:i:s');;
                $items->product_id = $p->id;
                $items->order_id = $order->id;
                $items->save();
            }
            DB::commit();
            return ['status' => 'success', 'message' => 'Venda finalizada com sucesso'];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('ERROR: VENDA SERVICE', ['message' => $e->getMessage()]);
            return ['status' => 'error', 'message' => 'Venda não pode ser finalizada'];

        }

    }

}
