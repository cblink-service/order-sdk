<?php

namespace Cblink\Service\Order\Kernel;

class AccessToken extends \Cblink\Service\Foundation\AccessToken
{

    public function getBaseUrl()
    {
        return $this->app->config['auth_url'];
    }

}