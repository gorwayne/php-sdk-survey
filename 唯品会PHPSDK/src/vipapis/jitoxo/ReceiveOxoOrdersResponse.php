<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class ReceiveOxoOrdersResponse {
	
	static $_TSPEC;
	public $commonParameters = null;
	public $successList = null;
	public $failedList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParameters'
			),
			2 => array(
			'var' => 'successList'
			),
			3 => array(
			'var' => 'failedList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParameters'])){
				
				$this->commonParameters = $vals['commonParameters'];
			}
			
			
			if (isset($vals['successList'])){
				
				$this->successList = $vals['successList'];
			}
			
			
			if (isset($vals['failedList'])){
				
				$this->failedList = $vals['failedList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiveOxoOrdersResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("commonParameters" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParameters = new \vipapis\jitoxo\CommonParameters();
				$this->commonParameters->read($input);
				
			}
			
			
			
			
			if ("successList" == $schemeField){
				
				$needSkip = false;
				
				$this->successList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\jitoxo\OrderAndMessage();
						$elem0->read($input);
						
						$this->successList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failedList" == $schemeField){
				
				$needSkip = false;
				
				$this->failedList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\jitoxo\OrderAndMessage();
						$elem1->read($input);
						
						$this->failedList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('commonParameters');
		
		if (!is_object($this->commonParameters)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParameters->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('successList');
		
		if (!is_array($this->successList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->successList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('failedList');
		
		if (!is_array($this->failedList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->failedList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>