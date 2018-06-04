<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements. See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership. The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package thrift.protocol
 */

namespace Osp\Protocol\JSON;

use Osp\Protocol\JSON\BaseContext;
use Osp\Protocol\JSONProtocol;

class PairContext extends BaseContext {
    private $first_ = true;
    private $colon_ = true;
    private $p_ = null;

    public function __construct($p) {
        $this->p_ = $p;
    }

    public function write() {
        if ($this->first_) {
            $this->first_ = false;
            $this->colon_ = true;
        } else {
            $this->p_->getTransport()->write($this->colon_ ? JSONProtocol::COLON : JSONProtocol::COMMA);
            $this->colon_ = !$this->colon_;
        }
    }

    public function read() {
        if ($this->first_) {
            $this->first_ = false;
            $this->colon_ = true;
        } else {
            $this->p_->readJSONSyntaxChar($this->colon_ ? JSONProtocol::COLON : JSONProtocol::COMMA);
            $this->colon_ = !$this->colon_;
        }
    }

    public function escapeNum() {
        return $this->colon_;
    }
    
    function isColon_() {
    	return $this->colon_;
    }
    
    function setColon_($colon_) {
    	$this->colon_ = $colon_;
    }
}