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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMachine() 获取设备型号
 * @method void setMachine(string $Machine) 设置设备型号
 * @method array getSpecInfos() 获取该机型对应的可售卖规格列表
 * @method void setSpecInfos(array $SpecInfos) 设置该机型对应的可售卖规格列表
 */

/**
 *按机型归类的实例可售卖规格信息
 */
class InstanceSpec extends AbstractModel
{
    /**
     * @var string 设备型号
     */
    public $Machine;

    /**
     * @var array 该机型对应的可售卖规格列表
     */
    public $SpecInfos;
    /**
     * @param string $Machine 设备型号
     * @param array $SpecInfos 该机型对应的可售卖规格列表
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
        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("SpecInfos",$param) and $param["SpecInfos"] !== null) {
            $this->SpecInfos = [];
            foreach ($param["SpecInfos"] as $key => $value){
                $obj = new SpecConfigInfo();
                $obj->deserialize($value);
                array_push($this->SpecInfos, $obj);
            }
        }
    }
}
