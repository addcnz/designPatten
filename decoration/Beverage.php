<?php

/**
 * 饮料处理类
 */
class Beverage{

	/**
	 * 饮料描述
	 */
	public $description = "";
	
	/**
	 * 价格 
	 */
	public $cost = 0;
	/**
	 * 牛奶
	 */
	public $milk = false;

	/**
	 * 豆浆
	 */
	public $soy = false;
	/**
	 * 摩卡
	 */
	public $mocha = false;

	/**
	 * 奶泡
	 */
	public $whip = false;


	function getDescription(){
		return $this->description;
	}
	
	/**
	 * 消费逻辑处理
	 */
	function cost(){
		if($this->hasMilk()){
			$this->cost += 4;
		}
		if($this->hasSoy()){
			$this->cost += 3;
		}
		if($this->hasMocha()){
			$this->cost += 7;
		}
		if($this->hasWhip()){
			$this->cost += 11;
		}  
	}


	function hasMilk(){
		return $this->milk;
	}

	function setMilk(){
		$this->milk = true;
	}

	function hasSoy(){
		return $this->soy;
	}

	function setSoy(){
		$this->soy = true;
	}

	function hasMocha(){
		return $this->mocha;
	}

	function setMocha(){
		$this->mocha = true;
	}

	function hasWhip(){
		return $this->whip;
	}

	function setWhip(){
		$this->whip = true;
	}
	function pay(){
		return $this->cost;
	}
	
}