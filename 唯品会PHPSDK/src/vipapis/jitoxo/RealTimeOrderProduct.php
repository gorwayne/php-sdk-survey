<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class RealTimeOrderProduct {
	
	static $_TSPEC;
	public $merItemNo = null;
	public $barcode = null;
	public $vendorSkuId = null;
	public $amount = null;
	public $businessType = null;
	public $vendorId = null;
	public $brandId = null;
	public $scheduleId = null;
	public $cooperationNo = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merItemNo'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'vendorSkuId'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'businessType'
			),
			6 => array(
			'var' => 'vendorId'
			),
			7 => array(
			'var' => 'brandId'
			),
			8 => array(
			'var' => 'scheduleId'
			),
			9 => array(
			'var' => 'cooperationNo'
			),
			10 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vendorSkuId'])){
				
				$this->vendorSkuId = $vals['vendorSkuId'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['cooperationNo'])){
				
				$this->cooperationNo = $vals['cooperationNo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RealTimeOrderProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vendorSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorSkuId); 
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scheduleId); 
				
			}
			
			
			
			
			if ("cooperationNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cooperationNo); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
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
		
		$xfer += $output->writeFieldBegin('merItemNo');
		$xfer += $output->writeI64($this->merItemNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorSkuId');
		$xfer += $output->writeI64($this->vendorSkuId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorId');
		$xfer += $output->writeI64($this->vendorId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brandId');
		$xfer += $output->writeI64($this->brandId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeI64($this->scheduleId);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>