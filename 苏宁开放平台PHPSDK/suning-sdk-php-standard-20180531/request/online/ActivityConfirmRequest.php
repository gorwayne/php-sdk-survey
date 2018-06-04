<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class ActivityConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityInfo;
	
	public function getActivityInfo() {
		return $this->activityInfo;
	}
	
	public function setActivityInfo($activityInfo) {
		$this->activityInfo = $activityInfo;
		$arr = array();
		foreach ($activityInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.activity.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmActivity";
	}
	
}

class ActivityInfo {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $memberNo;
	
	private $activityId;
	
	private $saleNum;
	
	private $cartItemId;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getCartItemId() {
		return $this->cartItemId;
	}

	public function setCartItemId($cartItemId) {
		$this->cartItemId = $cartItemId;
		$this->apiParams["cartItemId"] = $cartItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>