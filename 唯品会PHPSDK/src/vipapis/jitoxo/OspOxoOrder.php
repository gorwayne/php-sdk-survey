<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class OspOxoOrder {
	
	static $_TSPEC;
	public $id = null;
	public $orderSn = null;
	public $vendorId = null;
	public $vendorCode = null;
	public $brandId = null;
	public $barcode = null;
	public $areaId = null;
	public $areaName = null;
	public $businessType = null;
	public $merItemNo = null;
	public $vSkuId = null;
	public $amount = null;
	public $warehouse = null;
	public $saleType = null;
	public $scheduleId = null;
	public $mainScheduleSalesId = null;
	public $storeSn = null;
	public $findSrcState = null;
	public $failureMsg = null;
	public $remark = null;
	public $vopHold = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'vendorCode'
			),
			5 => array(
			'var' => 'brandId'
			),
			6 => array(
			'var' => 'barcode'
			),
			7 => array(
			'var' => 'areaId'
			),
			8 => array(
			'var' => 'areaName'
			),
			9 => array(
			'var' => 'businessType'
			),
			10 => array(
			'var' => 'merItemNo'
			),
			11 => array(
			'var' => 'vSkuId'
			),
			12 => array(
			'var' => 'amount'
			),
			13 => array(
			'var' => 'warehouse'
			),
			14 => array(
			'var' => 'saleType'
			),
			15 => array(
			'var' => 'scheduleId'
			),
			16 => array(
			'var' => 'mainScheduleSalesId'
			),
			17 => array(
			'var' => 'storeSn'
			),
			18 => array(
			'var' => 'findSrcState'
			),
			19 => array(
			'var' => 'failureMsg'
			),
			20 => array(
			'var' => 'remark'
			),
			21 => array(
			'var' => 'vopHold'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['areaName'])){
				
				$this->areaName = $vals['areaName'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['mainScheduleSalesId'])){
				
				$this->mainScheduleSalesId = $vals['mainScheduleSalesId'];
			}
			
			
			if (isset($vals['storeSn'])){
				
				$this->storeSn = $vals['storeSn'];
			}
			
			
			if (isset($vals['findSrcState'])){
				
				$this->findSrcState = $vals['findSrcState'];
			}
			
			
			if (isset($vals['failureMsg'])){
				
				$this->failureMsg = $vals['failureMsg'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['vopHold'])){
				
				$this->vopHold = $vals['vopHold'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OspOxoOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("areaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaName);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vSkuId);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("mainScheduleSalesId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mainScheduleSalesId);
				
			}
			
			
			
			
			if ("storeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSn);
				
			}
			
			
			
			
			if ("findSrcState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->findSrcState); 
				
			}
			
			
			
			
			if ("failureMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failureMsg);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("vopHold" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->vopHold); 
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorId');
		$xfer += $output->writeI64($this->vendorId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaName !== null) {
			
			$xfer += $output->writeFieldBegin('areaName');
			$xfer += $output->writeString($this->areaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('merItemNo');
			$xfer += $output->writeI64($this->merItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeString($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeString($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mainScheduleSalesId !== null) {
			
			$xfer += $output->writeFieldBegin('mainScheduleSalesId');
			$xfer += $output->writeString($this->mainScheduleSalesId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeSn');
			$xfer += $output->writeString($this->storeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->findSrcState !== null) {
			
			$xfer += $output->writeFieldBegin('findSrcState');
			$xfer += $output->writeByte($this->findSrcState);
			
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
		
		
		if($this->vopHold !== null) {
			
			$xfer += $output->writeFieldBegin('vopHold');
			$xfer += $output->writeByte($this->vopHold);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>