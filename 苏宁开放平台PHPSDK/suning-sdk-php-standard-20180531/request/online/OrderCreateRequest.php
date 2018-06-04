<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class OrderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $platFormTrade;
	
	public function getPlatFormTrade() {
		return $this->platFormTrade;
	}
	
	public function setPlatFormTrade($platFormTrade) {
		$this->platFormTrade = $platFormTrade;
		$this->apiParams["platFormTrade"] = $platFormTrade->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.online.order.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createOrder";
	}
	
}

class PlatFormOrder {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $orderItemStatus;
	
	private $skuId;
	
	private $outerSkuId;
	
	private $price;
	
	private $saleNum;
	
	private $pointAmount;
	
	private $postage;
	
	private $orderPayment;
	
	private $totalFee;
	
	private $fullReductionInfo;
	
	private $couponInfo;
	
	private $promotionNum;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}

	public function setOrderItemStatus($orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;
		$this->apiParams["orderItemStatus"] = $orderItemStatus;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getOuterSkuId() {
		return $this->outerSkuId;
	}

	public function setOuterSkuId($outerSkuId) {
		$this->outerSkuId = $outerSkuId;
		$this->apiParams["outerSkuId"] = $outerSkuId;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getPointAmount() {
		return $this->pointAmount;
	}

	public function setPointAmount($pointAmount) {
		$this->pointAmount = $pointAmount;
		$this->apiParams["pointAmount"] = $pointAmount;
	}
	
	public function getPostage() {
		return $this->postage;
	}

	public function setPostage($postage) {
		$this->postage = $postage;
		$this->apiParams["postage"] = $postage;
	}
	
	public function getOrderPayment() {
		return $this->orderPayment;
	}

	public function setOrderPayment($orderPayment) {
		$this->orderPayment = $orderPayment;
		$this->apiParams["orderPayment"] = $orderPayment;
	}
	
	public function getTotalFee() {
		return $this->totalFee;
	}

	public function setTotalFee($totalFee) {
		$this->totalFee = $totalFee;
		$this->apiParams["totalFee"] = $totalFee;
	}
	
	public function getFullReductionInfo() {
		return $this->fullReductionInfo;
	}

	public function setFullReductionInfo($fullReductionInfo) {
		$this->fullReductionInfo = $fullReductionInfo;
		$arr = array();
		foreach ($fullReductionInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["fullReductionInfo"] = $arr;
	}
	
	public function getCouponInfo() {
		return $this->couponInfo;
	}

	public function setCouponInfo($couponInfo) {
		$this->couponInfo = $couponInfo;
		$arr = array();
		foreach ($couponInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponInfo"] = $arr;
	}
	
	public function getPromotionNum() {
		return $this->promotionNum;
	}

	public function setPromotionNum($promotionNum) {
		$this->promotionNum = $promotionNum;
		$this->apiParams["promotionNum"] = $promotionNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormTrade {

	private $apiParams = array();
	
	private $orderId;
	
	private $memberNo;
	
	private $totalNo;
	
	private $orderStatus;
	
	private $orderType;
	
	private $payment;
	
	private $receiverNationality;
	
	private $receiverProvince;
	
	private $receiverCity;
	
	private $receiverCounty;
	
	private $receiverStreet;
	
	private $receiverAddress;
	
	private $receiverZip;
	
	private $receiverMobile;
	
	private $receiverPhone;
	
	private $receiverName;
	
	private $invoiceTitleType;
	
	private $invoiceType;
	
	private $invoiceTitle;
	
	private $invoiceContent;
	
	private $taxPayerNo;
	
	private $platFormOrder;
	
	private $regAddr;
	
	private $regPhone;
	
	private $accntBank;
	
	private $bankAccntNum;
	
	private $taxPayerAddr;
	
	private $taxPayerName;
	
	private $taxPayerPhone;
	
	private $taxMobilePhone;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getTotalNo() {
		return $this->totalNo;
	}

	public function setTotalNo($totalNo) {
		$this->totalNo = $totalNo;
		$this->apiParams["totalNo"] = $totalNo;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}

	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getPayment() {
		return $this->payment;
	}

	public function setPayment($payment) {
		$this->payment = $payment;
		$this->apiParams["payment"] = $payment;
	}
	
	public function getReceiverNationality() {
		return $this->receiverNationality;
	}

	public function setReceiverNationality($receiverNationality) {
		$this->receiverNationality = $receiverNationality;
		$this->apiParams["receiverNationality"] = $receiverNationality;
	}
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}

	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}

	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverCounty() {
		return $this->receiverCounty;
	}

	public function setReceiverCounty($receiverCounty) {
		$this->receiverCounty = $receiverCounty;
		$this->apiParams["receiverCounty"] = $receiverCounty;
	}
	
	public function getReceiverStreet() {
		return $this->receiverStreet;
	}

	public function setReceiverStreet($receiverStreet) {
		$this->receiverStreet = $receiverStreet;
		$this->apiParams["receiverStreet"] = $receiverStreet;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}

	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
	}
	
	public function getReceiverZip() {
		return $this->receiverZip;
	}

	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->apiParams["receiverZip"] = $receiverZip;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}

	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}

	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}

	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getInvoiceTitleType() {
		return $this->invoiceTitleType;
	}

	public function setInvoiceTitleType($invoiceTitleType) {
		$this->invoiceTitleType = $invoiceTitleType;
		$this->apiParams["invoiceTitleType"] = $invoiceTitleType;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}

	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParams["invoiceTitle"] = $invoiceTitle;
	}
	
	public function getInvoiceContent() {
		return $this->invoiceContent;
	}

	public function setInvoiceContent($invoiceContent) {
		$this->invoiceContent = $invoiceContent;
		$this->apiParams["invoiceContent"] = $invoiceContent;
	}
	
	public function getTaxPayerNo() {
		return $this->taxPayerNo;
	}

	public function setTaxPayerNo($taxPayerNo) {
		$this->taxPayerNo = $taxPayerNo;
		$this->apiParams["taxPayerNo"] = $taxPayerNo;
	}
	
	public function getPlatFormOrder() {
		return $this->platFormOrder;
	}

	public function setPlatFormOrder($platFormOrder) {
		$this->platFormOrder = $platFormOrder;
		$arr = array();
		foreach ($platFormOrder as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["platFormOrder"] = $arr;
	}
	
	public function getRegAddr() {
		return $this->regAddr;
	}

	public function setRegAddr($regAddr) {
		$this->regAddr = $regAddr;
		$this->apiParams["regAddr"] = $regAddr;
	}
	
	public function getRegPhone() {
		return $this->regPhone;
	}

	public function setRegPhone($regPhone) {
		$this->regPhone = $regPhone;
		$this->apiParams["regPhone"] = $regPhone;
	}
	
	public function getAccntBank() {
		return $this->accntBank;
	}

	public function setAccntBank($accntBank) {
		$this->accntBank = $accntBank;
		$this->apiParams["accntBank"] = $accntBank;
	}
	
	public function getBankAccntNum() {
		return $this->bankAccntNum;
	}

	public function setBankAccntNum($bankAccntNum) {
		$this->bankAccntNum = $bankAccntNum;
		$this->apiParams["bankAccntNum"] = $bankAccntNum;
	}
	
	public function getTaxPayerAddr() {
		return $this->taxPayerAddr;
	}

	public function setTaxPayerAddr($taxPayerAddr) {
		$this->taxPayerAddr = $taxPayerAddr;
		$this->apiParams["taxPayerAddr"] = $taxPayerAddr;
	}
	
	public function getTaxPayerName() {
		return $this->taxPayerName;
	}

	public function setTaxPayerName($taxPayerName) {
		$this->taxPayerName = $taxPayerName;
		$this->apiParams["taxPayerName"] = $taxPayerName;
	}
	
	public function getTaxPayerPhone() {
		return $this->taxPayerPhone;
	}

	public function setTaxPayerPhone($taxPayerPhone) {
		$this->taxPayerPhone = $taxPayerPhone;
		$this->apiParams["taxPayerPhone"] = $taxPayerPhone;
	}
	
	public function getTaxMobilePhone() {
		return $this->taxMobilePhone;
	}

	public function setTaxMobilePhone($taxMobilePhone) {
		$this->taxMobilePhone = $taxMobilePhone;
		$this->apiParams["taxMobilePhone"] = $taxMobilePhone;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class FullReductionInfo {

	private $apiParams = array();
	
	private $fullReductionType;
	
	private $fullReductionAmount;
	
	private $activityId;
	
	private $provider;
	
	public function getFullReductionType() {
		return $this->fullReductionType;
	}

	public function setFullReductionType($fullReductionType) {
		$this->fullReductionType = $fullReductionType;
		$this->apiParams["fullReductionType"] = $fullReductionType;
	}
	
	public function getFullReductionAmount() {
		return $this->fullReductionAmount;
	}

	public function setFullReductionAmount($fullReductionAmount) {
		$this->fullReductionAmount = $fullReductionAmount;
		$this->apiParams["fullReductionAmount"] = $fullReductionAmount;
	}
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getProvider() {
		return $this->provider;
	}

	public function setProvider($provider) {
		$this->provider = $provider;
		$this->apiParams["provider"] = $provider;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CouponInfo {

	private $apiParams = array();
	
	private $couponType;
	
	private $couponAmount;
	
	private $couponCode;
	
	public function getCouponType() {
		return $this->couponType;
	}

	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getCouponAmount() {
		return $this->couponAmount;
	}

	public function setCouponAmount($couponAmount) {
		$this->couponAmount = $couponAmount;
		$this->apiParams["couponAmount"] = $couponAmount;
	}
	
	public function getCouponCode() {
		return $this->couponCode;
	}

	public function setCouponCode($couponCode) {
		$this->couponCode = $couponCode;
		$this->apiParams["couponCode"] = $couponCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>