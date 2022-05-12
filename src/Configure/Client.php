<?php

namespace Cblink\Service\Order\Configure;

use Cblink\Service\Order\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 获取配置
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(array $query = [])
    {
        return $this->httpGet('/config', $query);
    }

    /**
     * 创建配置
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/config', $data);
    }
}