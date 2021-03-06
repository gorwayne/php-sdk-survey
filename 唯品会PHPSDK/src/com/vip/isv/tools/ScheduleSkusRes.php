<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\tools;

class ScheduleSkusRes {
	
	static $_TSPEC;
	public $scheduleSkusDos = null;
	public $totalCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scheduleSkusDos'
			),
			2 => array(
			'var' => 'totalCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scheduleSkusDos'])){
				
				$this->scheduleSkusDos = $vals['scheduleSkusDos'];
			}
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ScheduleSkusRes';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scheduleSkusDos" == $schemeField){
				
				$needSkip = false;
				
				$this->scheduleSkusDos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\isv\tools\ScheduleSkusDo();
						$elem0->read($input);
						
						$this->scheduleSkusDos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCount); 
				
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
		
		if($this->scheduleSkusDos !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleSkusDos');
			
			if (!is_array($this->scheduleSkusDos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scheduleSkusDos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('totalCount');
		$xfer += $output->writeI32($this->totalCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>