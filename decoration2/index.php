<?php

$pathinfo = pathinfo(__FILE__);
$files = scandir($pathinfo['dirname']);
foreach($files as $file){
    if(!preg_match("/^.*\.php$/", $file) || $file==$pathinfo['basename']){
        continue;
    }
    //echo $pathinfo['dirname']."/".$file."<br/>";
    include $pathinfo['dirname']."/".$file;
}


$drink = new Decaf();

$drink = new Milk($drink);
//$drink = new Milk($drink);
 $drink = new Whip($drink);

echo "您点了：".$drink->getDescription();  
echo "<br/>";
echo "花费：".$drink->cost();
die;
// abstract class Component {
//     abstract public function operation();
// }

// class Concrete_component extends Component {
//     public function operation() {
//         echo "具体对象的操作<br/>";
//     }
// }

// abstract class Decorator extends Component {
//     protected $component;

//     public function set_component(Component $component) {
//         $this->component = $component;
//     }

//     public function operation() {
//         if ($this->component != null) {
//             $this->component->operation();
//         }
//     }
// }

// class Concrete_decorator_A extends Decorator {
//     private $added_state;    //鏈被鐗规湁鐨勫姛鑳斤紝浠ュ尯鍒玞oncrete_decorator_A

//     public function operation() {
//         parent::operation();
//         $added_state = 'New State';
//         echo "具体装饰对象A的操作<br/>";
//     }
// }

// class Concrete_decorator_B extends Decorator {
//     public function operation() {
//         parent::operation();
//         $this->added_behavior();
//         echo "具体装饰对象B的操作<br/>";
//     }

//     private function added_behavior(){
//     }
// }



// //涓嬮潰鏄鎴风浠ｇ爜
// $c  = new Concrete_component();
// $d1 = new Concrete_decorator_A();
// $d2 = new Concrete_decorator_B();

// $d1->set_component($c);
// $d2->set_component($d1);
// $d2->operation();


/**
 * 输出一个字符串
 * 装饰器动态添加功能
 * Class EchoText
 */
class EchoText
{
    protected $decorator = [];

    public function Index()
    {
        //调用装饰器前置操作
        $this->beforeEcho();
        echo "你好，我是装饰器。";
        //调用装饰器后置操作
        $this->afterEcho();
    }

    //增加装饰器
    public function addDecorator(Decorator $decorator)
    {
        $this->decorator[] = $decorator;
    }

    //执行装饰器前置操作 先进先出原则
    protected function beforeEcho()
    {
        foreach ($this->decorator as $decorator)
            $decorator->before();
    }

    //执行装饰器后置操作 先进后出原则
    protected function afterEcho()
    {
        $tmp = array_reverse($this->decorator);
        foreach ($tmp as $decorator)
            $decorator->after();
    }
}


/**
 * 装饰器接口
 * Class Decorator
 */
interface Decorator
{
    public function before();

    public function after();
}

/**
 * 颜色装饰器实现
 * Class ColorDecorator
 */
class ColorDecorator implements Decorator
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function before()
    {
        echo "<dis style='color: {$this->color}'>";
    }

    public function after()
    {
        echo "</div>";
    }
}

/**
 * 字体大小装饰器实现
 * Class SizeDecorator
 */
class SizeDecorator implements Decorator
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function before()
    {
        echo "<dis style='font-size: {$this->size}px'>";
    }

    public function after()
    {
        echo "</div>";
    }
}

//实例化输出类
$echo = new EchoText();
//增加装饰器
$echo->addDecorator(new ColorDecorator('red'));
//增加装饰器
$echo->addDecorator(new SizeDecorator('22'));
//输出
$echo->Index();