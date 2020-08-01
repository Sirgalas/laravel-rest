<?php


namespace App\Http\Controllers;


use App\Entities\Application;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends ApiController
{
    public function __construct(Application $model)
    {
        $this->model=$model;
    }

    /**
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function createApplications(ApplicationRequest $request)
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function updateApplications(int $entityId, ApplicationRequest $request) {

        return parent::update($entityId, $request);
    }

}
