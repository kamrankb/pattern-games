<?php

namespace App\Repositories\Order;

interface OrderInterface {
    // Get All Orders
    public function getAll();

    // Create Order
    public function create($data);
}