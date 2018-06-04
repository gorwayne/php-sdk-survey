<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSiteIds() 获取站点的ID列表
 * @method void setSiteIds(array $SiteIds) 设置站点的ID列表
 * @method string getScannerType() 获取扫描模式，normal-正常扫描；deep-深度扫描
 * @method void setScannerType(string $ScannerType) 设置扫描模式，normal-正常扫描；deep-深度扫描
 * @method integer getRateLimit() 获取扫描速率限制，每秒发送X个HTTP请求
 * @method void setRateLimit(integer $RateLimit) 设置扫描速率限制，每秒发送X个HTTP请求
 */

/**
 *CreateSitesScans请求参数结构体
 */
class CreateSitesScansRequest extends AbstractModel
{
    /**
     * @var array 站点的ID列表
     */
    public $SiteIds;

    /**
     * @var string 扫描模式，normal-正常扫描；deep-深度扫描
     */
    public $ScannerType;

    /**
     * @var integer 扫描速率限制，每秒发送X个HTTP请求
     */
    public $RateLimit;
    /**
     * @param array $SiteIds 站点的ID列表
     * @param string $ScannerType 扫描模式，normal-正常扫描；deep-深度扫描
     * @param integer $RateLimit 扫描速率限制，每秒发送X个HTTP请求
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SiteIds",$param) and $param["SiteIds"] !== null) {
            $this->SiteIds = [];
            foreach ($param["SiteIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->SiteIds, $obj);
            }
        }

        if (array_key_exists("ScannerType",$param) and $param["ScannerType"] !== null) {
            $this->ScannerType = $param["ScannerType"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }
    }
}
