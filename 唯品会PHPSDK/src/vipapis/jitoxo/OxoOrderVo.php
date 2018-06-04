<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class OxoOrderVo {
	
	static $_TSPEC;
	public $vendorId = null;
	public $orderSn = null;
	public $storeSn = null;
	public $transportNo = null;
	public $confirmStoreState = null;
	public $status = null;
	public $createTime = null;
	public $responseTime = null;
	public $confirmTime = null;
	public $transportTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'storeSn'
			),
			4 => array(
			'var' => 'transportNo'
			),
			5 => array(
			'var' => 'confirmStoreState'
			),
			6 => array(
			'var' => 'status'
			),
			7 => array(
			'var' => 'createTime'
			),
			8 => array(
			'var' => 'responseTime'
			),
			9 => array(
			'var' => 'confirmTime'
			),
			10 => array(
			'var' => 'transportTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['storeSn'])){
				
				$this->storeSn = $vals['storeSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['confirmStoreState'])){
				
				$this->confirmStoreState = $vals['confirmStoreState'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['responseTime'])){
				
				$this->responseTime = $vals['responseTime'];
			}
			
			
			if (isset($vals['confirmTime'])){
				
				$this->confirmTime = $vals['confirmTime'];
			}
			
			
			if (isset($vals['transportTime'])){
				
				$this->transportTime = $vals['transportTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OxoOrderVo';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("storeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("confirmStoreState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->confirmStoreState); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("responseTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->responseTime);
				
			}
			
			
			
			
			if ("confirmTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->confirmTime);
				
			}
			
			
			
			
			if ("transportTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transportTime);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storeSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeSn');
			$xfer += $output->writeString($this->storeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmStoreState !== null) {
			
			$xfer += $output->writeFieldBegin('confirmStoreState');
			$xfer += $output->writeByte($this->confirmStoreState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->responseTime !== null) {
			
			$xfer += $output->writeFieldBegin('responseTime');
			$xfer += $output->writeI64($this->responseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmTime !== null) {
			
			$xfer += $output->writeFieldBegin('confirmTime');
			$xfer += $output->writeI64($this->confirmTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportTime');
			$xfer += $output->writeI64($this->transportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>