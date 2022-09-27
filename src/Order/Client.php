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
     * 修改订单地址
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateAddress($id, array $query = [])
    {
        return $this->httpPut(sprintf('/order/%s/address', $id), $query);
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
     * 订单发货单详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showTransport($id, array $query = [])
    {
        return $this->httpGet(sprintf('/transport/order/%s', $id), $query);
    }

    /**
     * 订单发货单日志
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showTransportLogs($id, array $query = [])
    {
        return $this->httpGet(sprintf('/transport/order/%s/logs', $id), $query);
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
     * 订单优惠信息
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showDiscount($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/discount', $id), $query);
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
     * 获取预定信息
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showReserve($id, array $query = [])
    {
        return $this->httpGet(sprintf('/order/%s/reserve', $id), $query);
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
     * 订单支付（无金额支付）
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function zeroPaid($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/zero-paid', $id), $data);
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
     * 订单接单
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function receive($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/receive', $id), $data);
    }

    /**
     * 订单出餐
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function dining($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/dining', $id), $data);
    }

    /**
     * 订单取餐
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function takeMeal($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/take-meal', $id), $data);
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

    /**
     * 生成取货码
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pickupNo($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/pickup-no', $id), $data);
    }

    /**
     * 获取订单可退金额
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRefundAmount($id, array $data = [])
    {
        return $this->httpGet(sprintf('/order/%s/refund', $id), $data);
    }

    /**
     * 获取订单可退商品
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRefundProduct($id, array $data = [])
    {
        return $this->httpGet(sprintf('/order/%s/refund/product', $id), $data);
    }

    /**
     * 申请订单退款
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refund($id, array $data = [])
    {
        return $this->httpPost(sprintf('/order/%s/refund', $id), $data);
    }
}