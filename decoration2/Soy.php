<?php
include "CondimentDecorate.php";
/**
 * 
 */
class Soy extends CondimentDecorate{
	/**
	 * 饮料价格
	 */
	public $cost = 11;
	public $description = "豆奶";

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		return $this->$beverage->getDescription()." ".$this->description;
	}

	function cost(){
		return $this->cost+$this->beverage->cost();
	}

}