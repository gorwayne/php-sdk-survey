<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;
interface ChannelSkuInventoryServiceIf{
	
	
	public function healthCheck();
	
	public function updateChannelInventory(\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $condition,\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $target);
	
}

class _ChannelSkuInventoryServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.inventory.api.ChannelSkuInventoryService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateChannelInventory(\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $condition,\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $target){
		
		$this->send_updateChannelInventory( $condition, $target);
		return $this->recv_updateChannelInventory();
	}
	
	public function send_updateChannelInventory(\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $condition,\com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory $target){
		
		$this->initInvocation("updateChannelInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryService_updateChannelInventory_args();
		
		$args->condition = $condition;
		
		$args->target = $target;
		
		$this->send_base($args);
	}
	
	public function recv_updateChannelInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryService_updateChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ChannelSkuInventoryService_healthCheck_args {
	
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




class ChannelSkuInventoryService_updateChannelInventory_args {
	
	static $_TSPEC;
	public $condition = null;
	public $target = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'condition'
			),
			2 => array(
			'var' => 'target'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['condition'])){
				
				$this->condition = $vals['condition'];
			}
			
			
			if (isset($vals['target'])){
				
				$this->target = $vals['target'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->condition = new \com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory();
			$this->condition->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->target = new \com\vip\vop\vcloud\inventory\api\UpdateChannelSkuInventory();
			$this->target->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('condition');
		
		if (!is_object($this->condition)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->condition->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('target');
		
		if (!is_object($this->target)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->target->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ChannelSkuInventoryService_healthCheck_result {
	
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




class ChannelSkuInventoryService_updateChannelInventory_result {
	
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
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>