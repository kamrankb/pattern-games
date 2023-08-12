<?php

namespace App\Repositories\Order;

use App\Models\Order;
use Exception;
use InvalidArgumentException;

class OrderRepository implements OrderInterface {

    private $order;

    public function __construct(Order $order) {
        $this->order = $order;
    }

    // Defination of GetAll
    public function getAll()
    {
        return $this->order->getAll();
    }

    //Defination of Create Method
    public function create($data)
    {
        try {
            $this->order::create([
                'name' => $data['name'],
                'price' => $data['price']
            ]);
    
            return $this->order->id;
        } catch(InvalidArgumentException $e) {
            return [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        } catch(Exception $e) {
            return [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }
    }
}