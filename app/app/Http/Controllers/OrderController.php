<?php


namespace App\Http\Controllers;


use App\Entities\Order;
use App\Http\Requests\OrderRequest;

class OrderController extends ApiController
{
    public function __construct(Order $model)
    {
        $this->model=$model;
    }

    /**
     * @param OrderRequest $request
     * @return mixed
     */
    public function createOrders(OrderRequest $request)
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param OrderRequest $request
     * @return mixed
     */
    public function updateOrders(int $entityId, OrderRequest $request) {

        return parent::update($entityId, $request);
    }
}
