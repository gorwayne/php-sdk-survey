<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class ActivityGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.online.activity.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
	}
	
	public function getBizName(){
		return "getActivity";
	}
	
}

?>