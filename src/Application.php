<?php

namespace Cblink\Service\Order;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Order\Client $order       订单
 * @property-read Refund\Client $refund     退单
 */
class Application extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Order\ServiceProvider::class,
        Refund\ServiceProvider::class,
    ];
}