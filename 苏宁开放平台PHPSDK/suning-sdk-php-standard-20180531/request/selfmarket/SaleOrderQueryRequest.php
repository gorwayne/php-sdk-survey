<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-11
 */
class SaleOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $state;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getState() {
		return $this->state;
	}
	
	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.selfmarket.saleorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "querySaleOrder";
	}
	
}

?>