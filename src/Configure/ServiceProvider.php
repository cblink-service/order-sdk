<?php

namespace Cblink\Service\Order\Configure;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['configure'] = function($pimple){
            return new Client($pimple);
        };
    }
}