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
 * @method integer getSiteId() 获取站点ID
 * @method void setSiteId(integer $SiteId) 设置站点ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 */

/**
 *ModifySiteAttribute请求参数结构体
 */
class ModifySiteAttributeRequest extends AbstractModel
{
    /**
     * @var integer 站点ID
     */
    public $SiteId;

    /**
     * @var string 站点名称
     */
    public $Name;
    /**
     * @param integer $SiteId 站点ID
     * @param string $Name 站点名称
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
