<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BaseRequestHeader {
	
	static $_TSPEC;
	public $userId = null;
	public $tokenId = null;
	public $tokenSecret = null;
	public $ip = null;
	public $marsCid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'tokenId'
			),
			3 => array(
			'var' => 'tokenSecret'
			),
			4 => array(
			'var' => 'ip'
			),
			5 => array(
			'var' => 'marsCid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['tokenId'])){
				
				$this->tokenId = $vals['tokenId'];
			}
			
			
			if (isset($vals['tokenSecret'])){
				
				$this->tokenSecret = $vals['tokenSecret'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['marsCid'])){
				
				$this->marsCid = $vals['marsCid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseRequestHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("tokenId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tokenId);
				
			}
			
			
			
			
			if ("tokenSecret" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tokenSecret);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("marsCid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marsCid);
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tokenId !== null) {
			
			$xfer += $output->writeFieldBegin('tokenId');
			$xfer += $output->writeString($this->tokenId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tokenSecret !== null) {
			
			$xfer += $output->writeFieldBegin('tokenSecret');
			$xfer += $output->writeString($this->tokenSecret);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marsCid !== null) {
			
			$xfer += $output->writeFieldBegin('marsCid');
			$xfer += $output->writeString($this->marsCid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>