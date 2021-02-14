<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        if (strpos($request->getUri(), '/api/') !== false) {

            if ($exception instanceof HttpException) {
                $response['message'] = Response::$statusTexts[$exception->getStatusCode()];
                $response['status_code'] = $exception->getStatusCode();
            } else if ($exception instanceof ModelNotFoundException) {
                $response['message'] = Response::$statusTexts[Response::HTTP_NOT_FOUND];
                $response['status_code'] = Response::HTTP_NOT_FOUND;
            }

            $response = [
                'msg' => (string)$exception,
                'status_code' => '404',
            ];

            return \Response::json($response)->setStatusCode(404);

            if ($this->isDebugMode()) {
                $response['debug'] = [
                    'exception' => get_class($exception),
                    'trace' => $exception->getTrace()
                ];
            }

            return response()->json([
            'status'      => 'failed',
            'status_code' => $response['status_code'],
            'msg'     => $response['message'],
            ], $response['status_code']);

        } else if ($this->isHttpException($exception)) {

            if ($exception->getStatusCode() == 404) {

                return response()->view('errors.404', [], 404);

            }else if ($exception->getStatusCode() == 500){

                return response()->view('errors.500', [], 500);

            }
        }

        return parent::render($request, $exception);
    }

}
