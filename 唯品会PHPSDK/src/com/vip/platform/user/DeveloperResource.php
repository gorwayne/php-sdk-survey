<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\user;

class DeveloperResource {
	
	static $_TSPEC;
	public $id = null;
	public $userId = null;
	public $developerId = null;
	public $developerName = null;
	public $resourceName = null;
	public $resourceCode = null;
	public $resourceValue = null;
	public $valueAlias = null;
	public $source = null;
	public $status = null;
	public $sync = null;
	public $createDate = null;
	public $updateDate = null;
	public $isDisplay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'userId'
			),
			3 => array(
			'var' => 'developerId'
			),
			4 => array(
			'var' => 'developerName'
			),
			5 => array(
			'var' => 'resourceName'
			),
			6 => array(
			'var' => 'resourceCode'
			),
			7 => array(
			'var' => 'resourceValue'
			),
			8 => array(
			'var' => 'valueAlias'
			),
			9 => array(
			'var' => 'source'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'sync'
			),
			12 => array(
			'var' => 'createDate'
			),
			13 => array(
			'var' => 'updateDate'
			),
			14 => array(
			'var' => 'isDisplay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['developerId'])){
				
				$this->developerId = $vals['developerId'];
			}
			
			
			if (isset($vals['developerName'])){
				
				$this->developerName = $vals['developerName'];
			}
			
			
			if (isset($vals['resourceName'])){
				
				$this->resourceName = $vals['resourceName'];
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
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sync'])){
				
				$this->sync = $vals['sync'];
			}
			
			
			if (isset($vals['createDate'])){
				
				$this->createDate = $vals['createDate'];
			}
			
			
			if (isset($vals['updateDate'])){
				
				$this->updateDate = $vals['updateDate'];
			}
			
			
			if (isset($vals['isDisplay'])){
				
				$this->isDisplay = $vals['isDisplay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeveloperResource';
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
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("developerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->developerId); 
				
			}
			
			
			
			
			if ("developerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->developerName);
				
			}
			
			
			
			
			if ("resourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resourceName);
				
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
				$input->readI32($this->source); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("sync" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sync); 
				
			}
			
			
			
			
			if ("createDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createDate);
				
			}
			
			
			
			
			if ("updateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateDate);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->developerId !== null) {
			
			$xfer += $output->writeFieldBegin('developerId');
			$xfer += $output->writeI64($this->developerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->developerName !== null) {
			
			$xfer += $output->writeFieldBegin('developerName');
			$xfer += $output->writeString($this->developerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resourceName !== null) {
			
			$xfer += $output->writeFieldBegin('resourceName');
			$xfer += $output->writeString($this->resourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resourceCode !== null) {
			
			$xfer += $output->writeFieldBegin('resourceCode');
			$xfer += $output->writeString($this->resourceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resourceValue !== null) {
			
			$xfer += $output->writeFieldBegin('resourceValue');
			$xfer += $output->writeString($this->resourceValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valueAlias !== null) {
			
			$xfer += $output->writeFieldBegin('valueAlias');
			$xfer += $output->writeString($this->valueAlias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sync !== null) {
			
			$xfer += $output->writeFieldBegin('sync');
			$xfer += $output->writeI32($this->sync);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createDate !== null) {
			
			$xfer += $output->writeFieldBegin('createDate');
			$xfer += $output->writeI64($this->createDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateDate !== null) {
			
			$xfer += $output->writeFieldBegin('updateDate');
			$xfer += $output->writeI64($this->updateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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