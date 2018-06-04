<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\redis;
interface SyncToRedisClusterServiceIf{
	
	
	public function healthCheck();
	
	public function syncAllAppFlowControl();
	
	public function syncAllAppKey();
	
	public function syncAllAppPermission();
	
	public function syncAllAppResource();
	
	public function syncAllAppSecret();
	
	public function syncAllBlackWhiteIp();
	
	public function syncAppFlow( $appId);
	
	public function syncAppInfo( $appId);
	
	public function syncAppPermission( $appId);
	
	public function syncAppSecret( $appId, $lazy);
	
	public function syncAppToSysBlackAppKey( $appId, $isAdd);
	
	public function syncAppWhiteIp( $appId);
	
	public function syncSysBlackIp();
	
	public function syncSysNamespace();
	
	public function syncSysResource();
	
}

class _SyncToRedisClusterServiceClient extends \Osp\Base\OspStub implements \com\vip\platform\redis\SyncToRedisClusterServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.platform.redis.SyncToRedisClusterService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncAllAppFlowControl(){
		
		$this->send_syncAllAppFlowControl();
		return $this->recv_syncAllAppFlowControl();
	}
	
	public function send_syncAllAppFlowControl(){
		
		$this->initInvocation("syncAllAppFlowControl");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppFlowControl_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllAppFlowControl(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppFlowControl_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllAppKey(){
		
		$this->send_syncAllAppKey();
		return $this->recv_syncAllAppKey();
	}
	
	public function send_syncAllAppKey(){
		
		$this->initInvocation("syncAllAppKey");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppKey_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllAppKey(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppKey_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllAppPermission(){
		
		$this->send_syncAllAppPermission();
		return $this->recv_syncAllAppPermission();
	}
	
	public function send_syncAllAppPermission(){
		
		$this->initInvocation("syncAllAppPermission");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppPermission_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllAppPermission(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppPermission_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllAppResource(){
		
		$this->send_syncAllAppResource();
		return $this->recv_syncAllAppResource();
	}
	
	public function send_syncAllAppResource(){
		
		$this->initInvocation("syncAllAppResource");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppResource_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllAppResource(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppResource_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllAppSecret(){
		
		$this->send_syncAllAppSecret();
		return $this->recv_syncAllAppSecret();
	}
	
	public function send_syncAllAppSecret(){
		
		$this->initInvocation("syncAllAppSecret");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppSecret_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllAppSecret(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllAppSecret_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllBlackWhiteIp(){
		
		$this->send_syncAllBlackWhiteIp();
		return $this->recv_syncAllBlackWhiteIp();
	}
	
	public function send_syncAllBlackWhiteIp(){
		
		$this->initInvocation("syncAllBlackWhiteIp");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllBlackWhiteIp_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllBlackWhiteIp(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAllBlackWhiteIp_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppFlow( $appId){
		
		$this->send_syncAppFlow( $appId);
		return $this->recv_syncAppFlow();
	}
	
	public function send_syncAppFlow( $appId){
		
		$this->initInvocation("syncAppFlow");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppFlow_args();
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppFlow(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppFlow_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppInfo( $appId){
		
		$this->send_syncAppInfo( $appId);
		return $this->recv_syncAppInfo();
	}
	
	public function send_syncAppInfo( $appId){
		
		$this->initInvocation("syncAppInfo");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppInfo_args();
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppInfo(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppInfo_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppPermission( $appId){
		
		$this->send_syncAppPermission( $appId);
		return $this->recv_syncAppPermission();
	}
	
	public function send_syncAppPermission( $appId){
		
		$this->initInvocation("syncAppPermission");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppPermission_args();
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppPermission(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppPermission_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppSecret( $appId, $lazy){
		
		$this->send_syncAppSecret( $appId, $lazy);
		return $this->recv_syncAppSecret();
	}
	
	public function send_syncAppSecret( $appId, $lazy){
		
		$this->initInvocation("syncAppSecret");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppSecret_args();
		
		$args->appId = $appId;
		
		$args->lazy = $lazy;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppSecret(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppSecret_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppToSysBlackAppKey( $appId, $isAdd){
		
		$this->send_syncAppToSysBlackAppKey( $appId, $isAdd);
		return $this->recv_syncAppToSysBlackAppKey();
	}
	
	public function send_syncAppToSysBlackAppKey( $appId, $isAdd){
		
		$this->initInvocation("syncAppToSysBlackAppKey");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppToSysBlackAppKey_args();
		
		$args->appId = $appId;
		
		$args->isAdd = $isAdd;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppToSysBlackAppKey(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppToSysBlackAppKey_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAppWhiteIp( $appId){
		
		$this->send_syncAppWhiteIp( $appId);
		return $this->recv_syncAppWhiteIp();
	}
	
	public function send_syncAppWhiteIp( $appId){
		
		$this->initInvocation("syncAppWhiteIp");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppWhiteIp_args();
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_syncAppWhiteIp(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncAppWhiteIp_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncSysBlackIp(){
		
		$this->send_syncSysBlackIp();
		return $this->recv_syncSysBlackIp();
	}
	
	public function send_syncSysBlackIp(){
		
		$this->initInvocation("syncSysBlackIp");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysBlackIp_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncSysBlackIp(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysBlackIp_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncSysNamespace(){
		
		$this->send_syncSysNamespace();
		return $this->recv_syncSysNamespace();
	}
	
	public function send_syncSysNamespace(){
		
		$this->initInvocation("syncSysNamespace");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysNamespace_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncSysNamespace(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysNamespace_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncSysResource(){
		
		$this->send_syncSysResource();
		return $this->recv_syncSysResource();
	}
	
	public function send_syncSysResource(){
		
		$this->initInvocation("syncSysResource");
		$args = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysResource_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncSysResource(){
		
		$result = new \com\vip\platform\redis\SyncToRedisClusterService_syncSysResource_result();
		$this->receive_base($result);
		
	}
	
	
}




class SyncToRedisClusterService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppFlowControl_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppKey_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppPermission_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppResource_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppSecret_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllBlackWhiteIp_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppFlow_args {
	
	static $_TSPEC;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppInfo_args {
	
	static $_TSPEC;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppPermission_args {
	
	static $_TSPEC;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppSecret_args {
	
	static $_TSPEC;
	public $appId = null;
	public $lazy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			2 => array(
			'var' => 'lazy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['lazy'])){
				
				$this->lazy = $vals['lazy'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->lazy);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lazy !== null) {
			
			$xfer += $output->writeFieldBegin('lazy');
			$xfer += $output->writeBool($this->lazy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppToSysBlackAppKey_args {
	
	static $_TSPEC;
	public $appId = null;
	public $isAdd = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			2 => array(
			'var' => 'isAdd'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['isAdd'])){
				
				$this->isAdd = $vals['isAdd'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isAdd);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isAdd');
		$xfer += $output->writeBool($this->isAdd);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppWhiteIp_args {
	
	static $_TSPEC;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->appId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeI32($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysBlackIp_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysNamespace_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysResource_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppFlowControl_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppKey_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppPermission_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppResource_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllAppSecret_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAllBlackWhiteIp_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppFlow_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppInfo_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppPermission_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppSecret_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppToSysBlackAppKey_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncAppWhiteIp_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysBlackIp_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysNamespace_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SyncToRedisClusterService_syncSysResource_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>