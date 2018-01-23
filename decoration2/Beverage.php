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
	
    /**
    * 大杯large 中杯medium 超大杯venti
    */
    public $size= '';

    CONST CUP_TALL = 'tall';
    CONST CUP_MEDIUM = 'large';
    CONST CUP_VENTI = 'venti';


	function getDescription(){
		return $this->description;
	}

	abstract function cost();

    function getSize(){
        return $this->size;
    }

    function setSize($size){
        $this->size = $size;
    }
	
}