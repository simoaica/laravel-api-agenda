<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($e instanceof ModelNotFoundException ) {
            return response()->json([
                'errors' => 'No agenda found for this id'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($e instanceof NotFoundHttpException ) {
            return response()->json([
                'errors' => 'Incorrect Route'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($e instanceof MethodNotAllowedHttpException ) {
            return response()->json([
                'errors' => 'Incorrect Request type'
            ], Response::HTTP_METHOD_NOT_ALLOWED);
        }


        return parent::render($request, $e);
    }
}
