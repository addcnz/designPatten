<?php
/**
 * 具体的装饰类 milk
 */
class Milk extends CondimentDecorate{
	/**
	 * 饮料价格
	 */
	public $cost = 3;
	public $description = "牛奶";

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		echo "qiang";
		return $this->beverage->getDescription()."+".$this->description;
	}

	function cost(){
		return $this->cost+$this->beverage->cost();
	}

}