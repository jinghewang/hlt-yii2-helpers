<?php
/**
 * Created by PhpStorm.
 * User: robin
 * Date: 2016/1/4
 * Time: 15:43
 */

namespace yii\helpers;


class ConfigHelper extends BaseConfigHelper
{

    /**
     * ��ȡ btg ������Ϣ
     * @author wjh
     * @date 20150601
     * @param $key
     * @param null $defaultValue
     * @return string
     */
    public static function getBtgConfig($key, $defaultValue = null)
    {
        return self::getParamsConfig('btg', $key, $defaultValue);
    }

    /**
     * ��ȡ company ������Ϣ
     * @author wjh
     * @date 20150601
     * @param $key
     * @param null $defaultValue
     * @return string
     */
    public static function getCompanyConfig($key, $defaultValue = null)
    {
        return self::getParamsConfig('company', $key, $defaultValue);
    }

    /**
     * ��ȡ app ������Ϣ
     * @author wjh
     * @date 20150601
     * @param $key
     * @param null $defaultValue
     * @return string
     */
    public static function getAppConfig($key, $defaultValue = null)
    {
        return self::getParamsConfig('app', $key, $defaultValue);
    }

}