<?php


namespace App\Traits;
use Illuminate\Support\Facades\Response;

trait ApiResponse
{
    public function sendResponse($result,string $message='OK',int $code=200)
    {
        return Response::json(self::makeResponse($message,$result),$code);
    }

    public function sendError($error,int$code=404,$data=[]){
        return Response::json(self::makeError($error,$data),$code);
    }

    public static function makeResponse($message,$data)
    {
        return[
            'success'=>true,
            'data'  =>$data,
            'message'=>$message
        ];
    }
    public static function makeError($error,$data)
    {
        $result = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($data)) {
            $result['data'] = $data;
        }
        return $result;
    }
}
