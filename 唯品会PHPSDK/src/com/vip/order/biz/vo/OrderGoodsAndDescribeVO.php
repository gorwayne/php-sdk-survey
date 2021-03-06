<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\order\biz\vo;

class OrderGoodsAndDescribeVO {
	
	static $_TSPEC;
	public $orderGoodsDescribeList = null;
	public $orderGoods = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderGoodsDescribeList'
			),
			2 => array(
			'var' => 'orderGoods'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderGoodsDescribeList'])){
				
				$this->orderGoodsDescribeList = $vals['orderGoodsDescribeList'];
			}
			
			
			if (isset($vals['orderGoods'])){
				
				$this->orderGoods = $vals['orderGoods'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoodsAndDescribeVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderGoodsDescribeList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoodsDescribeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\order\biz\vo\OrderGoodsDescribeVO();
						$elem0->read($input);
						
						$this->orderGoodsDescribeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderGoods" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoods = new \com\vip\order\biz\vo\OrderGoodsVO();
				$this->orderGoods->read($input);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderGoodsDescribeList !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoodsDescribeList');
			
			if (!is_array($this->orderGoodsDescribeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderGoodsDescribeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderGoods !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoods');
			
			if (!is_object($this->orderGoods)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderGoods->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>