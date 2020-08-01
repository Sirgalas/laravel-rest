<?php


namespace App\Http\Controllers;


use App\Entities\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends ApiController
{

    public function __construct(Customer $customer)
    {
        $this->model=$customer;
    }

    /**
     * @param CustomerRequest $request
     * @return mixed
     */
    public function createCustomers(CustomerRequest $request) {

        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param CustomerRequest $request
     * @return mixed
     */
    public function updateCustomers(int $entityId, CustomerRequest $request) {

        return parent::update($entityId, $request);
    }
}
