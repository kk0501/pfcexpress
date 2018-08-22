<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 18-8-22
 * Time: 下午4:17
 */

namespace Kk0501\Pfcexpress\Models;


class Channel
{
    public $baseChannelInfoId;
    public $channelCode;
    public $cnName;
    public $enName;
    public $refTime;
    public $shortEnImage;

    /**
     * @return mixed
     */
    public function getBaseChannelInfoId()
    {
        return $this->baseChannelInfoId;
    }

    /**
     * @param mixed $baseChannelInfoId
     */
    public function setBaseChannelInfoId($baseChannelInfoId)
    {
        $this->baseChannelInfoId = $baseChannelInfoId;
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
    public function getCnName()
    {
        return $this->cnName;
    }

    /**
     * @param mixed $cnName
     */
    public function setCnName($cnName)
    {
        $this->cnName = $cnName;
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
    public function getRefTime()
    {
        return $this->refTime;
    }

    /**
     * @param mixed $refTime
     */
    public function setRefTime($refTime)
    {
        $this->refTime = $refTime;
    }

    /**
     * @return mixed
     */
    public function getShortEnImage()
    {
        return $this->shortEnImage;
    }

    /**
     * @param mixed $shortEnImage
     */
    public function setShortEnImage($shortEnImage)
    {
        $this->shortEnImage = $shortEnImage;
    }

}