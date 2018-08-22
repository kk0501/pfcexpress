<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 18-8-22
 * Time: 下午2:44.
 */

namespace Kk0501\Pfcexpress\Models;

class Package
{
    public $orderNo;
    public $trackingNo;
    public $field1;
    public $orderStatus2;
    public $totalAmount;
    public $channelCode;
    public $enName;
    public $orderStatus;

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return mixed
     */
    public function getTrackingNo()
    {
        return $this->trackingNo;
    }

    /**
     * @param mixed $trackingNo
     */
    public function setTrackingNo($trackingNo)
    {
        $this->trackingNo = $trackingNo;
    }

    /**
     * @return mixed
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * @param mixed $field1
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus2()
    {
        return $this->orderStatus2;
    }

    /**
     * @param mixed $orderStatus2
     */
    public function setOrderStatus2($orderStatus2)
    {
        $this->orderStatus2 = $orderStatus2;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return mixed
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * @param mixed $channelCode
     */
    public function setChannelCode($channelCode)
    {
        $this->channelCode = $channelCode;
    }

    /**
     * @return mixed
     */
    public function getEnName()
    {
        return $this->enName;
    }

    /**
     * @param mixed $enName
     */
    public function setEnName($enName)
    {
        $this->enName = $enName;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }
}
