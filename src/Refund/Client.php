<?php

namespace Cblink\Service\Order\Refund;

use Cblink\Service\Order\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 退单列表
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $data = [])
    {
        return $this->httpGet('/refund', $data);
    }

    /**
     * 退单详情
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $data = [])
    {
        return $this->httpGet(sprintf('/refund/%s', $id), $data);
    }

    /**
     * 同意退货/同意退款
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function agree($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/agree', $id), $data);
    }

    /**
     * 买方取消退单
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancel($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/cancel', $id), $data);
    }

    /**
     * 商家确认收到退货
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function confirm($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/confirm', $id), $data);
    }

    /**
     * 拒绝退单
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refuse($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/refuse', $id), $data);
    }

    /**
     * 买方发起退货
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function transport($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/transport', $id), $data);
    }

    /**
     * 资金退回
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refunded($id, array $data = [])
    {
        return $this->httpPost(sprintf('/refund/%s/refunded', $id), $data);
    }

    /**
     * 退单日志
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showLogs($id, array $data = [])
    {
        return $this->httpGet(sprintf('/refund/%s/logs', $id), $data);
    }

    /**
     * 退单详情 货物退货物流信息
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showTransport($id, array $data = [])
    {
        return $this->httpGet(sprintf('/refund/%s/transport', $id), $data);
    }

    /**
     * 退单详情 货物退货物流信息
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showProduct($id, array $data = [])
    {
        return $this->httpGet(sprintf('/refund/%s/product', $id), $data);
    }

    /**
     * 获取退货地址
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showRefundAddress($id, array $data = [])
    {
        return $this->httpGet(sprintf('/refund/%s/address', $id), $data);
    }

}