<?php

namespace ResponseTransformer\Contracts;

use Illuminate\Http\JsonResponse;

interface ApiInterface
{

    /**
     * Create API response.
     *
     * @param int $status
     * @param string $message
     * @param array $data
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function response($status = 200, $message = null, $data = [], ...$extraData);

    /**
     * Create API response.
     *
     * @param string $message
     * @param array $data
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function success($message = null, $data = [], ...$extraData);


    /**
     * Create API response.
     *
     * @param int $status
     * @param string $message
     * @param array $data
     * @param array $errors
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function error($message = null, $data = [], $status = 400, $errors = [], ...$extraData);

    /**
     * Create successful (200) API response.
     *
     * @param string $message
     * @param array $data
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function ok($message = null, $data = [], ...$extraData);

    /**
     * Create Not found (404) API response.
     *
     * @param string $message
     *
     * @return JsonResponse
     */
    public function notFound($message = null);

    /**
     * Create Validation (422) API response.
     *
     * @param string $message
     * @param array $errors
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function validation($message = null, $errors = [], ...$extraData);

    /**
     * Create Validation (401) API response.
     *
     * @param string $message
     * @param array $errors
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function unauthorized($message = null, $errors = [], ...$extraData);

    /**
     * Create Validation (403) API response.
     *
     * @param string $message
     * @param array $data
     * @param array $extraData
     *
     * @return JsonResponse
     */
    public function forbidden($message = null, $data = [], ...$extraData);


}
