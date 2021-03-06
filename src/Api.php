<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 18-8-22
 * Time: 上午11:43.
 */

namespace Kk0501\Pfcexpress;

use Kk0501\Pfcexpress\Models\Channel;
use Kk0501\Pfcexpress\Models\Country;
use Kk0501\Pfcexpress\Models\Package;

class Api
{
    /**
     * @var webservice wsdl url
     */
    protected $webServiceUrl = 'http://www.pfcexpress.com/webservice/APIWebService.asmx?WSDL';

    /**
     * @var pfc express api key
     */
    protected $apiKey;

    /**
     * @var your user id
     */
    protected $userId;
    /**
     * @var \SoapClient
     */
    protected $webServiceClient;

    public function __construct(string $apiKey, string $userId)
    {
        $this->apiKey = $apiKey;
        $this->userId = $userId;
        $this->webServiceClient = new \SoapClient($this->webServiceUrl);
    }

    /**
     * 获取支持国家列表.
     *
     * @return array
     */
    public function getCountry()
    {
        $response = $this->webServiceClient->getCountry([
            'secretkey' => $this->apiKey,
        ]);
        $countrys = [];
        if (!empty($response->getCountryResult)) {
            $decodeJson = json_decode($response->getCountryResult, true);
            foreach ($decodeJson as $country) {
                $countryObj = new Country();
                $countryObj->setShortName($country['ShortName']);
                $countryObj->setEnName($country['EnName']);
                $countryObj->setCnName($country['Cnname']);
                $countryObj->setBasePlaceId($country['Base_placeId']);
                $countrys[] = $countryObj;
            }
        }

        return $countrys;
    }

    /**
     * 根据订单号或追踪号查询包裹详细信息.
     *
     * @param $orderNo
     *
     * @return array
     */
    public function getPackage($orderNo)
    {
        $response = $this->webServiceClient->getPackage([
            'orderNO' => $orderNo,
            'customerid' => $this->userId,
            'secretkey' => $this->apiKey,
        ]);
        $packages = [];
        if (!empty($response->getPackageResult)) {
            $decodeJson = json_decode($response->getPackageResult, true);
            foreach ($decodeJson as $package) {
                $packageObj = new Package();
                $packageObj->setOrderNo($package['OrderNo']);
                $packageObj->setTrackingNo($package['TrackingNo']);
                $packageObj->setField1($package['field1']);
                $packageObj->setOrderStatus2($package['OrderStatus2']);
                $packageObj->setTotalAmount($package['TotalAmount']);
                $packageObj->setChannelCode($package['ChannelCode']);
                $packageObj->setEnName($package['EnName']);
                $packageObj->setOrderStatus($package['OrderStatus']);
                $packages[] = $packageObj;
            }
        }

        return $packages;
    }

    public function getChannel()
    {
        $response = $this->webServiceClient->getChannel([
            'secretkey' => $this->apiKey,
        ]);
        $channels = [];
        if (!empty($response->getChannelResult)) {
            $decodeJson = json_decode($response->getChannelResult, true);
            foreach ($decodeJson as $channel) {
                $channelObj = new Channel();
                $channelObj->setBaseChannelInfoId($channel['base_Channelinfoid']);
                $channelObj->setChannelCode($channel['ChannelCode']);
                $channelObj->setCnName($channel['CnName']);
                $channelObj->setEnName($channel['enname']);
                $channelObj->setRefTime($channel['reftime']);
                $channelObj->setShortEnImage($channel['shortenimage']);
                $channels[] = $channelObj;
            }
        }

        return $channels;
    }
}
