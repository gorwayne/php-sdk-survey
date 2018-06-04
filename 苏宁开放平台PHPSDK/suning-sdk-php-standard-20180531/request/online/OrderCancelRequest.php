<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class OrderCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $flag;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getFlag() {
		return $this->flag;
	}
	
	public function setFlag($flag) {
		$this->flag = $flag;
		$this->apiParams["flag"] = $flag;
	}
	
	public function getApiMethodName(){
		return 'suning.online.order.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->flag, 'flag');
	}
	
	public function getBizName(){
		return "cancelOrder";
	}
	
}

?>