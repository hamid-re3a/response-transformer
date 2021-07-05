<?php

namespace ResponseTransformer\Facades;

use ResponseTransformer\ResponseTransformer;
use Illuminate\Support\Facades\Facade;

use ResponseTransformer\Contracts\ApiInterface;

/**
 * @method static ResponseTransformer response($status, $message, $data, ...$extraData)
 * @method static ResponseTransformer success($message = null, $data = [],$status = 200, ...$extraData)
 * @method static ResponseTransformer error($message = null, $data = [], $status = 400, $errors = [], ...$extraData)
 * @method static ResponseTransformer ok($message = null, $data = [], ...$extraData)
 * @method static ResponseTransformer notFound($message = null)
 * @method static ResponseTransformer validation($message = null, $errors = [], ...$extraData)
 *
 * @see ResponseTransformer
 */
class API extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ApiInterface::class;
    }
}
