<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24 0024
 * Time: 下午 5:41
 */
class ProductBean
{
	private $pName;
	private $pNum;
	private $pPrice;
	
	/**
	 * ProductBean constructor.
	 */
	public function ProductBean(){}
	
	/**
	 * @return mixed
	 */
	public function getPName()
	{
		return $this->pName;
	}
	
	/**
	 * @param mixed $pName
	 */
	public function setPName($pName)
	{
		$this->pName = $pName;
	}
	
	/**
	 * @return mixed
	 */
	public function getPNum()
	{
		return $this->pNum;
	}
	
	/**
	 * @param mixed $pNum
	 */
	public function setPNum($pNum)
	{
		$this->pNum = $pNum;
	}
	
	/**
	 * @return mixed
	 */
	public function getPPrice()
	{
		return $this->pPrice;
	}
	
	/**
	 * @param mixed $pPrice
	 */
	public function setPPrice($pPrice)
	{
		$this->pPrice = $pPrice;
	}
	
	
}