<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\order\biz\request;

class SubCondition {
	
	static $_TSPEC;
	public $relType = null;
	public $conditionItems = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'relType'
			),
			2 => array(
			'var' => 'conditionItems'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['relType'])){
				
				$this->relType = $vals['relType'];
			}
			
			
			if (isset($vals['conditionItems'])){
				
				$this->conditionItems = $vals['conditionItems'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubCondition';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("relType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relType);
				
			}
			
			
			
			
			if ("conditionItems" == $schemeField){
				
				$needSkip = false;
				
				$this->conditionItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\order\biz\request\ConditionItem();
						$elem0->read($input);
						
						$this->conditionItems[$_size0++] = $elem0;
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
		
		if($this->relType !== null) {
			
			$xfer += $output->writeFieldBegin('relType');
			$xfer += $output->writeString($this->relType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conditionItems !== null) {
			
			$xfer += $output->writeFieldBegin('conditionItems');
			
			if (!is_array($this->conditionItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->conditionItems as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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