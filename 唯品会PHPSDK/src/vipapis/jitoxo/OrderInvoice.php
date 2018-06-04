<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class OrderInvoice {
	
	static $_TSPEC;
	public $orderSn = null;
	public $confirmInvoiceState = null;
	public $orderStatus = null;
	public $createTime = null;
	public $packageNo = null;
	public $invoiceTitle = null;
	public $invoiceAmount = null;
	public $invoiceType = null;
	public $taxPayNo = null;
	public $eInvoiceConfirmCount = null;
	public $eInvoiceUrl = null;
	public $eInvoiceCode = null;
	public $eInvoiceSerialNo = null;
	public $vendorTaxPayNo = null;
	public $isWriteback = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'confirmInvoiceState'
			),
			3 => array(
			'var' => 'orderStatus'
			),
			4 => array(
			'var' => 'createTime'
			),
			5 => array(
			'var' => 'packageNo'
			),
			6 => array(
			'var' => 'invoiceTitle'
			),
			7 => array(
			'var' => 'invoiceAmount'
			),
			8 => array(
			'var' => 'invoiceType'
			),
			9 => array(
			'var' => 'taxPayNo'
			),
			10 => array(
			'var' => 'eInvoiceConfirmCount'
			),
			11 => array(
			'var' => 'eInvoiceUrl'
			),
			12 => array(
			'var' => 'eInvoiceCode'
			),
			13 => array(
			'var' => 'eInvoiceSerialNo'
			),
			14 => array(
			'var' => 'vendorTaxPayNo'
			),
			15 => array(
			'var' => 'isWriteback'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['confirmInvoiceState'])){
				
				$this->confirmInvoiceState = $vals['confirmInvoiceState'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['packageNo'])){
				
				$this->packageNo = $vals['packageNo'];
			}
			
			
			if (isset($vals['invoiceTitle'])){
				
				$this->invoiceTitle = $vals['invoiceTitle'];
			}
			
			
			if (isset($vals['invoiceAmount'])){
				
				$this->invoiceAmount = $vals['invoiceAmount'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['taxPayNo'])){
				
				$this->taxPayNo = $vals['taxPayNo'];
			}
			
			
			if (isset($vals['eInvoiceConfirmCount'])){
				
				$this->eInvoiceConfirmCount = $vals['eInvoiceConfirmCount'];
			}
			
			
			if (isset($vals['eInvoiceUrl'])){
				
				$this->eInvoiceUrl = $vals['eInvoiceUrl'];
			}
			
			
			if (isset($vals['eInvoiceCode'])){
				
				$this->eInvoiceCode = $vals['eInvoiceCode'];
			}
			
			
			if (isset($vals['eInvoiceSerialNo'])){
				
				$this->eInvoiceSerialNo = $vals['eInvoiceSerialNo'];
			}
			
			
			if (isset($vals['vendorTaxPayNo'])){
				
				$this->vendorTaxPayNo = $vals['vendorTaxPayNo'];
			}
			
			
			if (isset($vals['isWriteback'])){
				
				$this->isWriteback = $vals['isWriteback'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInvoice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("confirmInvoiceState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->confirmInvoiceState); 
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("packageNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageNo);
				
			}
			
			
			
			
			if ("invoiceTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceTitle);
				
			}
			
			
			
			
			if ("invoiceAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoiceAmount);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
			}
			
			
			
			
			if ("taxPayNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayNo);
				
			}
			
			
			
			
			if ("eInvoiceConfirmCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->eInvoiceConfirmCount); 
				
			}
			
			
			
			
			if ("eInvoiceUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eInvoiceUrl);
				
			}
			
			
			
			
			if ("eInvoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eInvoiceCode);
				
			}
			
			
			
			
			if ("eInvoiceSerialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eInvoiceSerialNo);
				
			}
			
			
			
			
			if ("vendorTaxPayNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorTaxPayNo);
				
			}
			
			
			
			
			if ("isWriteback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isWriteback);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirmInvoiceState');
		$xfer += $output->writeByte($this->confirmInvoiceState);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeI64($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->packageNo !== null) {
			
			$xfer += $output->writeFieldBegin('packageNo');
			$xfer += $output->writeString($this->packageNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTitle !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTitle');
			$xfer += $output->writeString($this->invoiceTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAmount !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAmount');
			$xfer += $output->writeDouble($this->invoiceAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeI32($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayNo');
			$xfer += $output->writeString($this->taxPayNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceConfirmCount !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceConfirmCount');
			$xfer += $output->writeI32($this->eInvoiceConfirmCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceUrl !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceUrl');
			$xfer += $output->writeString($this->eInvoiceUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceCode !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceCode');
			$xfer += $output->writeString($this->eInvoiceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceSerialNo !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceSerialNo');
			$xfer += $output->writeString($this->eInvoiceSerialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorTaxPayNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorTaxPayNo');
			$xfer += $output->writeString($this->vendorTaxPayNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isWriteback !== null) {
			
			$xfer += $output->writeFieldBegin('isWriteback');
			$xfer += $output->writeString($this->isWriteback);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>