<?php

namespace App\Services;

use App\Models\Payment;

class PaymentService
{

    protected $paymentService;
    public function __construct(Payment $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function createOrderPayment($orderId, $paymentName)
    {
        return $this->paymentService->create([
            'name' => $paymentName,
            'order_id' => $orderId,
        ]);
    }

}
