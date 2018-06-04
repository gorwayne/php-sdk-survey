<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class RefundordersyncCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $refundId;
	
	/**
	 * 
	 */
	private $refundType;
	
	/**
	 * 
	 */
	private $refundAmount;
	
	/**
	 * 
	 */
	private $refundStatus;
	
	/**
	 * 
	 */
	private $createDate;
	
	/**
	 * 
	 */
	private $refundDate;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getRefundId() {
		return $this->refundId;
	}
	
	public function setRefundId($refundId) {
		$this->refundId = $refundId;
		$this->apiParams["refundId"] = $refundId;
	}
	
	public function getRefundType() {
		return $this->refundType;
	}
	
	public function setRefundType($refundType) {
		$this->refundType = $refundType;
		$this->apiParams["refundType"] = $refundType;
	}
	
	public function getRefundAmount() {
		return $this->refundAmount;
	}
	
	public function setRefundAmount($refundAmount) {
		$this->refundAmount = $refundAmount;
		$this->apiParams["refundAmount"] = $refundAmount;
	}
	
	public function getRefundStatus() {
		return $this->refundStatus;
	}
	
	public function setRefundStatus($refundStatus) {
		$this->refundStatus = $refundStatus;
		$this->apiParams["refundStatus"] = $refundStatus;
	}
	
	public function getCreateDate() {
		return $this->createDate;
	}
	
	public function setCreateDate($createDate) {
		$this->createDate = $createDate;
		$this->apiParams["createDate"] = $createDate;
	}
	
	public function getRefundDate() {
		return $this->refundDate;
	}
	
	public function setRefundDate($refundDate) {
		$this->refundDate = $refundDate;
		$this->apiParams["refundDate"] = $refundDate;
	}
	
	public function getApiMethodName(){
		return 'suning.online.refundordersync.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->refundId, 'refundId');
		RequestCheckUtil::checkNotNull($this->refundType, 'refundType');
		RequestCheckUtil::checkNotNull($this->refundAmount, 'refundAmount');
		RequestCheckUtil::checkNotNull($this->refundStatus, 'refundStatus');
		RequestCheckUtil::checkNotNull($this->createDate, 'createDate');
		RequestCheckUtil::checkNotNull($this->refundDate, 'refundDate');
	}
	
	public function getBizName(){
		return "createRefundordersync";
	}
	
}

?>