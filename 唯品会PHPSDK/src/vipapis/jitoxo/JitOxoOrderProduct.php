<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class JitOxoOrderProduct {
	
	static $_TSPEC;
	public $sizeId = null;
	public $barcode = null;
	public $vSkuId = null;
	public $amount = null;
	public $vendorCode = null;
	public $warehouse = null;
	public $brandId = null;
	public $mscheduledSellingId = null;
	public $businessType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizeId'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'vSkuId'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'vendorCode'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'brandId'
			),
			8 => array(
			'var' => 'mscheduledSellingId'
			),
			9 => array(
			'var' => 'businessType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['mscheduledSellingId'])){
				
				$this->mscheduledSellingId = $vals['mscheduledSellingId'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitOxoOrderProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vSkuId);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("mscheduledSellingId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mscheduledSellingId);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
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
		
		$xfer += $output->writeFieldBegin('sizeId');
		$xfer += $output->writeI64($this->sizeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeString($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mscheduledSellingId !== null) {
			
			$xfer += $output->writeFieldBegin('mscheduledSellingId');
			$xfer += $output->writeString($this->mscheduledSellingId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>