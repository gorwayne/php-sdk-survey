<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class OmniOrderDetail {
	
	static $_TSPEC;
	public $orderId = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $businessType = null;
	public $orderSn = null;
	public $barcode = null;
	public $frontWarehouse = null;
	public $storeSn = null;
	public $updatedStoreSn = null;
	public $findSrcState = null;
	public $status = null;
	public $vopHold = null;
	public $scheduleId = null;
	public $failureMsg = null;
	public $remark = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderId'
			),
			2 => array(
			'var' => 'province'
			),
			3 => array(
			'var' => 'city'
			),
			4 => array(
			'var' => 'district'
			),
			5 => array(
			'var' => 'businessType'
			),
			6 => array(
			'var' => 'orderSn'
			),
			7 => array(
			'var' => 'barcode'
			),
			8 => array(
			'var' => 'frontWarehouse'
			),
			9 => array(
			'var' => 'storeSn'
			),
			10 => array(
			'var' => 'updatedStoreSn'
			),
			11 => array(
			'var' => 'findSrcState'
			),
			12 => array(
			'var' => 'status'
			),
			13 => array(
			'var' => 'vopHold'
			),
			14 => array(
			'var' => 'scheduleId'
			),
			15 => array(
			'var' => 'failureMsg'
			),
			16 => array(
			'var' => 'remark'
			),
			17 => array(
			'var' => 'createTime'
			),
			18 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['frontWarehouse'])){
				
				$this->frontWarehouse = $vals['frontWarehouse'];
			}
			
			
			if (isset($vals['storeSn'])){
				
				$this->storeSn = $vals['storeSn'];
			}
			
			
			if (isset($vals['updatedStoreSn'])){
				
				$this->updatedStoreSn = $vals['updatedStoreSn'];
			}
			
			
			if (isset($vals['findSrcState'])){
				
				$this->findSrcState = $vals['findSrcState'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['vopHold'])){
				
				$this->vopHold = $vals['vopHold'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['failureMsg'])){
				
				$this->failureMsg = $vals['failureMsg'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmniOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("frontWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->frontWarehouse);
				
			}
			
			
			
			
			if ("storeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSn);
				
			}
			
			
			
			
			if ("updatedStoreSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedStoreSn);
				
			}
			
			
			
			
			if ("findSrcState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->findSrcState); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("vopHold" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->vopHold); 
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("failureMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failureMsg);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
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
		
		$xfer += $output->writeFieldBegin('orderId');
		$xfer += $output->writeString($this->orderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('province');
		$xfer += $output->writeString($this->province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('district');
		$xfer += $output->writeString($this->district);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('businessType');
		$xfer += $output->writeByte($this->businessType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->frontWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('frontWarehouse');
			$xfer += $output->writeString($this->frontWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeSn');
			$xfer += $output->writeString($this->storeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedStoreSn !== null) {
			
			$xfer += $output->writeFieldBegin('updatedStoreSn');
			$xfer += $output->writeString($this->updatedStoreSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('findSrcState');
		$xfer += $output->writeByte($this->findSrcState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeByte($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vopHold !== null) {
			
			$xfer += $output->writeFieldBegin('vopHold');
			$xfer += $output->writeByte($this->vopHold);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failureMsg !== null) {
			
			$xfer += $output->writeFieldBegin('failureMsg');
			$xfer += $output->writeString($this->failureMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeString($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateTime');
		$xfer += $output->writeString($this->updateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>