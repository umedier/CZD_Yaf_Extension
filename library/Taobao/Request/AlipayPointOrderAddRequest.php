<?php
/**
 * TOP API: alipay.point.order.add request
 * 
 * @author auto create
 * @since 1.0, 2013-09-13 16:51:03
 */
class Taobao_Request_AlipayPointOrderAddRequest
{
	/** 
	 * 支付宝用户给应用发放集分宝的授权。
	 **/
	private $authToken;
	
	/** 
	 * 向用户展示集分宝发放备注
	 **/
	private $memo;
	
	/** 
	 * isv提供的发放号订单号，由数字和组成，最大长度为32为，需要保证每笔发放的唯一性，支付宝会对该参数做唯一性控制。如果使用同样的订单号，支付宝将返回订单号已经存在的错误
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 发放集分宝时间
	 **/
	private $orderTime;
	
	/** 
	 * 发放集分宝的数量
	 **/
	private $pointCount;
	
	/** 
	 * 用户标识符，用于指定集分宝发放的用户，和user_symbol_type一起使用，确定一个唯一的支付宝用户
	 **/
	private $userSymbol;
	
	/** 
	 * 用户标识符类型，现在支持ALIPAY_USER_ID:表示支付宝用户ID,ALIPAY_LOGON_ID:表示支付宝登陆号
	 **/
	private $userSymbolType;
	
	private $apiParas = array();
	
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setMerchantOrderNo($merchantOrderNo)
	{
		$this->merchantOrderNo = $merchantOrderNo;
		$this->apiParas["merchant_order_no"] = $merchantOrderNo;
	}

	public function getMerchantOrderNo()
	{
		return $this->merchantOrderNo;
	}

	public function setOrderTime($orderTime)
	{
		$this->orderTime = $orderTime;
		$this->apiParas["order_time"] = $orderTime;
	}

	public function getOrderTime()
	{
		return $this->orderTime;
	}

	public function setPointCount($pointCount)
	{
		$this->pointCount = $pointCount;
		$this->apiParas["point_count"] = $pointCount;
	}

	public function getPointCount()
	{
		return $this->pointCount;
	}

	public function setUserSymbol($userSymbol)
	{
		$this->userSymbol = $userSymbol;
		$this->apiParas["user_symbol"] = $userSymbol;
	}

	public function getUserSymbol()
	{
		return $this->userSymbol;
	}

	public function setUserSymbolType($userSymbolType)
	{
		$this->userSymbolType = $userSymbolType;
		$this->apiParas["user_symbol_type"] = $userSymbolType;
	}

	public function getUserSymbolType()
	{
		return $this->userSymbolType;
	}

	public function getApiMethodName()
	{
		return "alipay.point.order.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		Taobao_RequestCheckUtil::checkNotNull($this->memo,"memo");
		Taobao_RequestCheckUtil::checkNotNull($this->merchantOrderNo,"merchantOrderNo");
		Taobao_RequestCheckUtil::checkNotNull($this->orderTime,"orderTime");
		Taobao_RequestCheckUtil::checkNotNull($this->pointCount,"pointCount");
		Taobao_RequestCheckUtil::checkNotNull($this->userSymbol,"userSymbol");
		Taobao_RequestCheckUtil::checkNotNull($this->userSymbolType,"userSymbolType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}