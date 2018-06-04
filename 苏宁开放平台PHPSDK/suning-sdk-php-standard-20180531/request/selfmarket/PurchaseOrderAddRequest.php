<?php
/**
 * 苏宁开放平台接口 - 订单确认
 *
 * @author suning
 * @date   2016-3-25
 */
class PurchaseOrderAddRequest  extends SuningRequest{
	
	/**
	 * 供应商编码。供应商代码。只支持输入单个，长度为8
	 */
	private $supplierCode;
	
	/**
	 * 采购订单编号。订单编号
	 */
	private $orderCode;
	
	/**
	 * 订单行号。采购订单行项目号
	 */
	private $itemNo;
	
	/**
	 * 确认类型。70:能够满足 80:延期到货行项目状态为21可填写80，行项目状态为20填写70
	 */
	private $confirmType;
	
	/**
	 * 最晚交货日期。确认类型为延期交货时，此字段必填。最晚交货日期必须大于苏宁采购订单有效期而小于等于苏宁采购订单有效期+7天。格式：yyyy-MM-dd
	 */
	private $confirmDeliveryDate;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}
	
	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getConfirmType() {
		return $this->confirmType;
	}
	
	public function setConfirmType($confirmType) {
		$this->confirmType = $confirmType;
		$this->apiParams["confirmType"] = $confirmType;
	}
	
	public function getConfirmDeliveryDate() {
		return $this->confirmDeliveryDate;
	}
	
	public function setConfirmDeliveryDate($confirmDeliveryDate) {
		$this->confirmDeliveryDate = $confirmDeliveryDate;
		$this->apiParams["confirmDeliveryDate"] = $confirmDeliveryDate;
	}
	
	public function getApiMethodName(){
		return 'suning.purchaseorder.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->itemNo, 'itemNo');
	}
	
	public function getBizName(){
		return "purchaseOrderConfirm";
	}
	
}

?>