<?php

namespace Cblink\Service\Order\Statistics;

use Cblink\Service\Order\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 订单数量统计
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderCount(array $query = [])
    {
        return $this->httpGet('/statistics/order', $query);
    }

    /**
     * 退单数量统计
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refundCount(array $query = [])
    {
        return $this->httpGet('/statistics/refund', $query);
    }

}