<?php

/**
 * 饮料处理类
 */
abstract class Beverage{

	/**
	 * 饮料描述
	 */
	public $description = "";
	
	/**
	 * 价格 
	 */
	public $cost = 0;
	


	function getDescription(){
		return $this->description;
	}
	
	/**
	 * 消费逻辑处理
	 */
	abstract function cost();


	
}