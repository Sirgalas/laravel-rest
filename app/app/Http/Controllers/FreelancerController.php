<?php

namespace App\Http\Controllers;

use App\Entities\Freelancer;
use App\Http\Requests\FreelancerRequest;
use Illuminate\Http\Request;

class FreelancerController extends ApiController
{

    public function __construct(Freelancer $freelancer)
    {
        $this->model=$freelancer;
    }

    /**
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function createFreelancer(FreelancerRequest $request) {

        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function updateFreelancer(int $entityId, FreelancerRequest $request) {

        return parent::update($entityId, $request);
    }

}
