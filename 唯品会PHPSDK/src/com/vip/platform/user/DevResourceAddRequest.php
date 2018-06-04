<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\user;

class DevResourceAddRequest {
	
	static $_TSPEC;
	public $developerId = null;
	public $userId = null;
	public $resourceCode = null;
	public $resourceValue = null;
	public $valueAlias = null;
	public $source = null;
	public $isDisplay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'developerId'
			),
			2 => array(
			'var' => 'userId'
			),
			3 => array(
			'var' => 'resourceCode'
			),
			4 => array(
			'var' => 'resourceValue'
			),
			5 => array(
			'var' => 'valueAlias'
			),
			6 => array(
			'var' => 'source'
			),
			7 => array(
			'var' => 'isDisplay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['developerId'])){
				
				$this->developerId = $vals['developerId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['resourceCode'])){
				
				$this->resourceCode = $vals['resourceCode'];
			}
			
			
			if (isset($vals['resourceValue'])){
				
				$this->resourceValue = $vals['resourceValue'];
			}
			
			
			if (isset($vals['valueAlias'])){
				
				$this->valueAlias = $vals['valueAlias'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['isDisplay'])){
				
				$this->isDisplay = $vals['isDisplay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DevResourceAddRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("developerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->developerId); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("resourceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resourceCode);
				
			}
			
			
			
			
			if ("resourceValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resourceValue);
				
			}
			
			
			
			
			if ("valueAlias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->valueAlias);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\platform\user\DevResourceSource::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->source = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("isDisplay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDisplay); 
				
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
		
		if($this->developerId !== null) {
			
			$xfer += $output->writeFieldBegin('developerId');
			$xfer += $output->writeI64($this->developerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resourceCode');
		$xfer += $output->writeString($this->resourceCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resourceValue');
		$xfer += $output->writeString($this->resourceValue);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->valueAlias !== null) {
			
			$xfer += $output->writeFieldBegin('valueAlias');
			$xfer += $output->writeString($this->valueAlias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('source');
		
		$em = new \com\vip\platform\user\DevResourceSource; 
		$output->writeString($em::$__names[$this->source]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isDisplay !== null) {
			
			$xfer += $output->writeFieldBegin('isDisplay');
			$xfer += $output->writeI32($this->isDisplay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>