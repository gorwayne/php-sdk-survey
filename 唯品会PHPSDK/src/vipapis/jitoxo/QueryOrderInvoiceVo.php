<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class QueryOrderInvoiceVo {
	
	static $_TSPEC;
	public $vendorId = null;
	public $orderSns = null;
	public $startTime = null;
	public $endTime = null;
	public $invoiceTypes = null;
	public $confirmInvoiceStates = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'orderSns'
			),
			3 => array(
			'var' => 'startTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'invoiceTypes'
			),
			6 => array(
			'var' => 'confirmInvoiceStates'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['invoiceTypes'])){
				
				$this->invoiceTypes = $vals['invoiceTypes'];
			}
			
			
			if (isset($vals['confirmInvoiceStates'])){
				
				$this->confirmInvoiceStates = $vals['confirmInvoiceStates'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryOrderInvoiceVo';
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
			
			
			
			
			if ("orderSns" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSns = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->orderSns[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("invoiceTypes" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceTypes = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readByte($elem2); 
						
						$this->invoiceTypes[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("confirmInvoiceStates" == $schemeField){
				
				$needSkip = false;
				
				$this->confirmInvoiceStates = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readByte($elem3); 
						
						$this->confirmInvoiceStates[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->orderSns !== null) {
			
			$xfer += $output->writeFieldBegin('orderSns');
			
			if (!is_array($this->orderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTypes !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTypes');
			
			if (!is_array($this->invoiceTypes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->invoiceTypes as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmInvoiceStates !== null) {
			
			$xfer += $output->writeFieldBegin('confirmInvoiceStates');
			
			if (!is_array($this->confirmInvoiceStates)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->confirmInvoiceStates as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>