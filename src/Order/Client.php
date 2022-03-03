<?php

namespace Cblink\Service\Order\Order;

use Cblink\Service\Order\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 订单列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/order', $query);
    }

    /**
     * 订单详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s', $id), $query);
    }

    /**
     * 获取订单商品
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showProducts($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/products', $id), $query);
    }

    /**
     * 获取订单地址
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showAddress($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/address', $id), $query);
    }

    /**
     * 订单发货单
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showTransports($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/transport', $id), $query);
    }

    /**
     * 订单支付记录
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showPayments($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/payment', $id), $query);
    }

    /**
     * 获取订单日志
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showLogs($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/logs', $id), $query);
    }

    /**
     * 创建订单
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/order', $data);
    }

    /**
     * 订单支付
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function paid($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/paid', $id), $data);
    }

    /**
     * 订单发货
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function transport($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/transport', $id), $data);
    }

    /**
     * 确认收货
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function confirm($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/confirm', $id), $data);
    }

    /**
     * 取消订单
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancel($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/cancel', $id), $data);
    }
}