<?php
/**
 * 订单确认
 *
 * @author suning
 * @date   2016-3-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/PurchaseOrderAddRequest.php');
$req = new PurchaseOrderAddRequest();
//赋值……
$req->setSupplierCode("10001372");
$req->setOrderCode("4500075418");
$req->setItemNo("20");
//$req->setConfirmType("1");
//$req->setConfirmDeliveryDate("1");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>