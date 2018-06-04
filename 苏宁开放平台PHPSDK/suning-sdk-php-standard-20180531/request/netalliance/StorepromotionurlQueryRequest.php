<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-23
 */
class StorepromotionurlQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $adBookId;
	
	/**
	 * 
	 */
	private $commCode;
	
	/**
	 * 
	 */
	private $mertCode;
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getCommCode() {
		return $this->commCode;
	}
	
	public function setCommCode($commCode) {
		$this->commCode = $commCode;
		$this->apiParams["commCode"] = $commCode;
	}
	
	public function getMertCode() {
		return $this->mertCode;
	}
	
	public function setMertCode($mertCode) {
		$this->mertCode = $mertCode;
		$this->apiParams["mertCode"] = $mertCode;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.storepromotionurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
		RequestCheckUtil::checkNotNull($this->mertCode, 'mertCode');
	}
	
	public function getBizName(){
		return "queryStorepromotionurl";
	}
	
}

?>