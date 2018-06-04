<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class OmniOrderReq {
	
	static $_TSPEC;
	public $vendorId = null;
	public $brandId = null;
	public $businessType = null;
	public $orderSn = null;
	public $vopHold = null;
	public $findSrcState = null;
	public $status = null;
	public $stQueryTime = null;
	public $etQueryTime = null;
	public $limit = null;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'brandId'
			),
			3 => array(
			'var' => 'businessType'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'vopHold'
			),
			6 => array(
			'var' => 'findSrcState'
			),
			7 => array(
			'var' => 'status'
			),
			8 => array(
			'var' => 'stQueryTime'
			),
			9 => array(
			'var' => 'etQueryTime'
			),
			10 => array(
			'var' => 'limit'
			),
			11 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['vopHold'])){
				
				$this->vopHold = $vals['vopHold'];
			}
			
			
			if (isset($vals['findSrcState'])){
				
				$this->findSrcState = $vals['findSrcState'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['stQueryTime'])){
				
				$this->stQueryTime = $vals['stQueryTime'];
			}
			
			
			if (isset($vals['etQueryTime'])){
				
				$this->etQueryTime = $vals['etQueryTime'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmniOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->orderSn); 
				
			}
			
			
			
			
			if ("vopHold" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->vopHold); 
				
			}
			
			
			
			
			if ("findSrcState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->findSrcState); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("stQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stQueryTime); 
				
			}
			
			
			
			
			if ("etQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->etQueryTime); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
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
		
		$xfer += $output->writeFieldBegin('vendorId');
		$xfer += $output->writeI64($this->vendorId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeByte($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vopHold !== null) {
			
			$xfer += $output->writeFieldBegin('vopHold');
			$xfer += $output->writeByte($this->vopHold);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->findSrcState !== null) {
			
			$xfer += $output->writeFieldBegin('findSrcState');
			$xfer += $output->writeByte($this->findSrcState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stQueryTime !== null) {
			
			$xfer += $output->writeFieldBegin('stQueryTime');
			$xfer += $output->writeI64($this->stQueryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->etQueryTime !== null) {
			
			$xfer += $output->writeFieldBegin('etQueryTime');
			$xfer += $output->writeI64($this->etQueryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>