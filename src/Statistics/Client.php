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
     * 订单金额统计
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderFee(array $query = [])
    {
        return $this->httpGet('/statistics/order/amount', $query);
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

    /**
     * 退单金额统计
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refundFee(array $query = [])
    {
        return $this->httpGet('/statistics/refund/amount', $query);
    }

    /**
     * 订单优惠金额统计
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function discountFee(array $query = [])
    {
        return $this->httpGet('/statistics/order/discount', $query);
    }

    /**
     * 订单平均客单价
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function customerFee(array $query = [])
    {
        return $this->httpGet('/statistics/order/customer-amount', $query);
    }

    /**
     * 商品销售数量top
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function productCountTop(array $query = [])
    {
        return $this->httpGet('/statistics/order/product/count-top', $query);
    }

    /**
     * 商品销售金额top
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function productAmountTop(array $query = [])
    {
        return $this->httpGet('/statistics/order/product/amount-top', $query);
    }

    /**
     * 商品销售金额top
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function totalFeeGroupByDate(array $query = [])
    {
        return $this->httpGet('/statistics/order/amount/date', $query);
    }

    /**
     * 商品销售金额top
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function countGroupByDate(array $query = [])
    {
        return $this->httpGet('/statistics/order/count/date', $query);
    }

}