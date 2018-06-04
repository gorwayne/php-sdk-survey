<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class VipSkuInventory {
	
	static $_TSPEC;
	public $partnerId = null;
	public $warehouseId = null;
	public $skuId = null;
	public $cooperationNo = null;
	public $warehouse = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'warehouseId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'cooperationNo'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['cooperationNo'])){
				
				$this->cooperationNo = $vals['cooperationNo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipSkuInventory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warehouseId); 
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("cooperationNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cooperationNo); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationNo !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationNo');
			$xfer += $output->writeI64($this->cooperationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>