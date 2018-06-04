<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;
interface AdminInventoryServiceIf{
	
	
	public function downloadAndParseDieselInventoryFileToDb( $partnerId, $transId);
	
	public function fullUpdateVipSkuInventory( $transId, $warehouseId, $skuId, $cooperationNo, $warehouse, $quantity);
	
	public function healthCheck();
	
	public function listVipSkuInventory( $partnerId,\com\vip\vop\vcloud\common\api\Pagination $pagination);
	
	public function parseDieselInventoryUpdateToWarehouse( $partnerId, $transId);
	
	public function refreshInventories( $partnerId, $transId, $channelId, $sellingStatus);
	
	public function refreshOfficialInventories( $partnerId, $transId, $sellingStatus);
	
	public function releaseExpiredHoldQuantity();
	
	public function updateChannelInventoryToOfficial( $partnerId, $transId);
	
	public function updateChannelInventoryToVip( $partnerId);
	
	public function updateDieselInventoryToWarehouse( $partnerId, $hourOffset, $transId);
	
	public function updateWarehouseInventoryToChannel( $partnerId, $transId);
	
	public function updateWarehouseInventoryToChannels( $partnerId, $transId);
	
}

class _AdminInventoryServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\inventory\api\AdminInventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.inventory.api.AdminInventoryService", "1.0.0");
	}
	
	
	public function downloadAndParseDieselInventoryFileToDb( $partnerId, $transId){
		
		$this->send_downloadAndParseDieselInventoryFileToDb( $partnerId, $transId);
		return $this->recv_downloadAndParseDieselInventoryFileToDb();
	}
	
	public function send_downloadAndParseDieselInventoryFileToDb( $partnerId, $transId){
		
		$this->initInvocation("downloadAndParseDieselInventoryFileToDb");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_downloadAndParseDieselInventoryFileToDb_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_downloadAndParseDieselInventoryFileToDb(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_downloadAndParseDieselInventoryFileToDb_result();
		$this->receive_base($result);
		
	}
	
	
	public function fullUpdateVipSkuInventory( $transId, $warehouseId, $skuId, $cooperationNo, $warehouse, $quantity){
		
		$this->send_fullUpdateVipSkuInventory( $transId, $warehouseId, $skuId, $cooperationNo, $warehouse, $quantity);
		return $this->recv_fullUpdateVipSkuInventory();
	}
	
	public function send_fullUpdateVipSkuInventory( $transId, $warehouseId, $skuId, $cooperationNo, $warehouse, $quantity){
		
		$this->initInvocation("fullUpdateVipSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_fullUpdateVipSkuInventory_args();
		
		$args->transId = $transId;
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$args->cooperationNo = $cooperationNo;
		
		$args->warehouse = $warehouse;
		
		$args->quantity = $quantity;
		
		$this->send_base($args);
	}
	
	public function recv_fullUpdateVipSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_fullUpdateVipSkuInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listVipSkuInventory( $partnerId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->send_listVipSkuInventory( $partnerId, $pagination);
		return $this->recv_listVipSkuInventory();
	}
	
	public function send_listVipSkuInventory( $partnerId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->initInvocation("listVipSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_listVipSkuInventory_args();
		
		$args->partnerId = $partnerId;
		
		$args->pagination = $pagination;
		
		$this->send_base($args);
	}
	
	public function recv_listVipSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_listVipSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function parseDieselInventoryUpdateToWarehouse( $partnerId, $transId){
		
		$this->send_parseDieselInventoryUpdateToWarehouse( $partnerId, $transId);
		return $this->recv_parseDieselInventoryUpdateToWarehouse();
	}
	
	public function send_parseDieselInventoryUpdateToWarehouse( $partnerId, $transId){
		
		$this->initInvocation("parseDieselInventoryUpdateToWarehouse");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_parseDieselInventoryUpdateToWarehouse_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_parseDieselInventoryUpdateToWarehouse(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_parseDieselInventoryUpdateToWarehouse_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshInventories( $partnerId, $transId, $channelId, $sellingStatus){
		
		$this->send_refreshInventories( $partnerId, $transId, $channelId, $sellingStatus);
		return $this->recv_refreshInventories();
	}
	
	public function send_refreshInventories( $partnerId, $transId, $channelId, $sellingStatus){
		
		$this->initInvocation("refreshInventories");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_refreshInventories_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$args->channelId = $channelId;
		
		$args->sellingStatus = $sellingStatus;
		
		$this->send_base($args);
	}
	
	public function recv_refreshInventories(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_refreshInventories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function refreshOfficialInventories( $partnerId, $transId, $sellingStatus){
		
		$this->send_refreshOfficialInventories( $partnerId, $transId, $sellingStatus);
		return $this->recv_refreshOfficialInventories();
	}
	
	public function send_refreshOfficialInventories( $partnerId, $transId, $sellingStatus){
		
		$this->initInvocation("refreshOfficialInventories");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_refreshOfficialInventories_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$args->sellingStatus = $sellingStatus;
		
		$this->send_base($args);
	}
	
	public function recv_refreshOfficialInventories(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_refreshOfficialInventories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function releaseExpiredHoldQuantity(){
		
		$this->send_releaseExpiredHoldQuantity();
		return $this->recv_releaseExpiredHoldQuantity();
	}
	
	public function send_releaseExpiredHoldQuantity(){
		
		$this->initInvocation("releaseExpiredHoldQuantity");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_releaseExpiredHoldQuantity_args();
		
		$this->send_base($args);
	}
	
	public function recv_releaseExpiredHoldQuantity(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_releaseExpiredHoldQuantity_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateChannelInventoryToOfficial( $partnerId, $transId){
		
		$this->send_updateChannelInventoryToOfficial( $partnerId, $transId);
		return $this->recv_updateChannelInventoryToOfficial();
	}
	
	public function send_updateChannelInventoryToOfficial( $partnerId, $transId){
		
		$this->initInvocation("updateChannelInventoryToOfficial");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateChannelInventoryToOfficial_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_updateChannelInventoryToOfficial(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateChannelInventoryToOfficial_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateChannelInventoryToVip( $partnerId){
		
		$this->send_updateChannelInventoryToVip( $partnerId);
		return $this->recv_updateChannelInventoryToVip();
	}
	
	public function send_updateChannelInventoryToVip( $partnerId){
		
		$this->initInvocation("updateChannelInventoryToVip");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateChannelInventoryToVip_args();
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_updateChannelInventoryToVip(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateChannelInventoryToVip_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateDieselInventoryToWarehouse( $partnerId, $hourOffset, $transId){
		
		$this->send_updateDieselInventoryToWarehouse( $partnerId, $hourOffset, $transId);
		return $this->recv_updateDieselInventoryToWarehouse();
	}
	
	public function send_updateDieselInventoryToWarehouse( $partnerId, $hourOffset, $transId){
		
		$this->initInvocation("updateDieselInventoryToWarehouse");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateDieselInventoryToWarehouse_args();
		
		$args->partnerId = $partnerId;
		
		$args->hourOffset = $hourOffset;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_updateDieselInventoryToWarehouse(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateDieselInventoryToWarehouse_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateWarehouseInventoryToChannel( $partnerId, $transId){
		
		$this->send_updateWarehouseInventoryToChannel( $partnerId, $transId);
		return $this->recv_updateWarehouseInventoryToChannel();
	}
	
	public function send_updateWarehouseInventoryToChannel( $partnerId, $transId){
		
		$this->initInvocation("updateWarehouseInventoryToChannel");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateWarehouseInventoryToChannel_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_updateWarehouseInventoryToChannel(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateWarehouseInventoryToChannel_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateWarehouseInventoryToChannels( $partnerId, $transId){
		
		$this->send_updateWarehouseInventoryToChannels( $partnerId, $transId);
		return $this->recv_updateWarehouseInventoryToChannels();
	}
	
	public function send_updateWarehouseInventoryToChannels( $partnerId, $transId){
		
		$this->initInvocation("updateWarehouseInventoryToChannels");
		$args = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateWarehouseInventoryToChannels_args();
		
		$args->partnerId = $partnerId;
		
		$args->transId = $transId;
		
		$this->send_base($args);
	}
	
	public function recv_updateWarehouseInventoryToChannels(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\AdminInventoryService_updateWarehouseInventoryToChannels_result();
		$this->receive_base($result);
		
	}
	
	
}




class AdminInventoryService_downloadAndParseDieselInventoryFileToDb_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_fullUpdateVipSkuInventory_args {
	
	static $_TSPEC;
	public $transId = null;
	public $warehouseId = null;
	public $skuId = null;
	public $cooperationNo = null;
	public $warehouse = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'warehouseId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'cooperationNo'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['cooperationNo'])){
				
				$this->cooperationNo = $vals['cooperationNo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->cooperationNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->quantity); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationNo !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationNo');
			$xfer += $output->writeI64($this->cooperationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_healthCheck_args {
	
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




class AdminInventoryService_listVipSkuInventory_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $pagination = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'pagination'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pagination !== null) {
			
			$xfer += $output->writeFieldBegin('pagination');
			
			if (!is_object($this->pagination)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pagination->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_parseDieselInventoryUpdateToWarehouse_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_refreshInventories_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	public $channelId = null;
	public $sellingStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'sellingStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['sellingStatus'])){
				
				$this->sellingStatus = $vals['sellingStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sellingStatus); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingStatus !== null) {
			
			$xfer += $output->writeFieldBegin('sellingStatus');
			$xfer += $output->writeI32($this->sellingStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_refreshOfficialInventories_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	public $sellingStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			3 => array(
			'var' => 'sellingStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['sellingStatus'])){
				
				$this->sellingStatus = $vals['sellingStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sellingStatus); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingStatus !== null) {
			
			$xfer += $output->writeFieldBegin('sellingStatus');
			$xfer += $output->writeI32($this->sellingStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_releaseExpiredHoldQuantity_args {
	
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




class AdminInventoryService_updateChannelInventoryToOfficial_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_updateChannelInventoryToVip_args {
	
	static $_TSPEC;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_updateDieselInventoryToWarehouse_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $hourOffset = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'hourOffset'
			),
			3 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['hourOffset'])){
				
				$this->hourOffset = $vals['hourOffset'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->hourOffset); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hourOffset');
		$xfer += $output->writeI32($this->hourOffset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_updateWarehouseInventoryToChannel_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_updateWarehouseInventoryToChannels_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $transId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'transId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transId');
		$xfer += $output->writeString($this->transId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_downloadAndParseDieselInventoryFileToDb_result {
	
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




class AdminInventoryService_fullUpdateVipSkuInventory_result {
	
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




class AdminInventoryService_healthCheck_result {
	
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




class AdminInventoryService_listVipSkuInventory_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\VipSkuInventoryQueryResult();
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




class AdminInventoryService_parseDieselInventoryUpdateToWarehouse_result {
	
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




class AdminInventoryService_refreshInventories_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_refreshOfficialInventories_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AdminInventoryService_releaseExpiredHoldQuantity_result {
	
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




class AdminInventoryService_updateChannelInventoryToOfficial_result {
	
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




class AdminInventoryService_updateChannelInventoryToVip_result {
	
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




class AdminInventoryService_updateDieselInventoryToWarehouse_result {
	
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




class AdminInventoryService_updateWarehouseInventoryToChannel_result {
	
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




class AdminInventoryService_updateWarehouseInventoryToChannels_result {
	
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