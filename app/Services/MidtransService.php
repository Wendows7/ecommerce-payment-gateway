<?php

namespace App\Services;

use Midtrans\Config;
use Midtrans\Snap;

class MidtransService
{

    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createCharge($codeId)
    {
        $orderId = $codeId;
        $orderData = $this->orderService->getByOrderCode($orderId);

        if ($orderData == null) {
            return response()->json(['message' =>"order code not found"], 404);
        }
        $orderDetail = $this->orderService->getOrderDetailByOrderId($orderData->id);

        $params = [
            'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $orderData->total_price,
            ],
            'customer_details' => [
            'first_name' => $orderDetail->first_name,
            'last_name' => $orderDetail->last_name,
            'email' => $orderData->user->email,
            'phone' => $orderDetail->phone_number,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
        return $snapToken;
    }
}
