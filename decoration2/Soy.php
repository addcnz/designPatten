<?php

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
		return $this->beverage->getDescription()." ".$this->description;
	}

	function cost(){
		if($this->beverage->getSize() == Beverage::CUP_VENTI){
			$this->cost += 0.10;
		}else if($this->beverage->getSize() == Beverage::CUP_TALL){
			$this->cost += 0.20;
		}else{
			$this->cost += 0.15;
		}
		return $this->cost+$this->beverage->cost();
	}

}