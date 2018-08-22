<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 18-8-22
 * Time: 下午2:25.
 */

namespace Kk0501\Pfcexpress\Models;

class Country
{
    public $shortName;
    public $enName;
    public $cnName;
    public $basePlaceId;

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param mixed $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
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
    public function getBasePlaceId()
    {
        return $this->basePlaceId;
    }

    /**
     * @param mixed $basePlaceId
     */
    public function setBasePlaceId($basePlaceId)
    {
        $this->basePlaceId = $basePlaceId;
    }
}
