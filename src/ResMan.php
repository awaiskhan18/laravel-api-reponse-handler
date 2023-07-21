<?php


namespace Awaiskhan18;


class ResMan
{
    const STATUS_SUCCESS = 200;
    const STATUS_ERROR = 401;

    public function validationHandler($validator)
    {
        $errors = $validator->errors()->all();

        return response()->json([
            'statusCode' => self::STATUS_ERROR,
            'success' => false,
            'error' => true,
            'data' => [],
            'statusDescription' => array_map('trim', $errors),
        ]);
    }

    public function successHandler($data, $statusDescription)
    {
        return response()->json([
            'statusCode' => self::STATUS_SUCCESS,
            'success' => true,
            'error' => false,
            'data' => $data,
            'statusDescription' => $statusDescription,
        ]);
    }

    public function failureHandler($data, $statusDescription)
    {
        return response()->json([
            'statusCode' => self::STATUS_ERROR,
            'success' => false,
            'error' => true,
            'data' => $data,
            'statusDescription' => $statusDescription,
        ]);
    }


}
