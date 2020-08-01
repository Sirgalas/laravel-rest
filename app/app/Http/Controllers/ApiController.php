<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ApiController extends Controller
{
    protected $model;
    protected $request;

    public function index(Request $request)
    {
        $result= $this->model->limit($request->limit??100)->offset($request->offset??0)->get();
        return $this->sendResponse($result,'OK',200);
    }

    public function one(int $id=null)
    {
        $entity = $this->model->find($id)->first();

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        return $this->sendResponse($entity, 'OK',200);
    }

    public function create($request)
    {
        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Created', 201);
    }

    public function update(int $id, $request)
    {
        $entity = $this->model->find($id)->first();

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Updated',204);
    }

    public function delete(int $id)
    {
        $entity = $this->model->find($id);

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $entity->delete();

        return $this->sendResponse(null, 'Deleted',204);

    }

}
