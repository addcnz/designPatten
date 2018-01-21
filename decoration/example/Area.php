<?

//from https://segmentfault.com/a/1190000004467783

// 区域抽象类
abstract class Area
{    
    abstract public function treasure();
}

//森林类，价值100
class Forest extends Area 
{
    public function treasure()
    {
        return 100;
    }
}
//沙漠类，价值10
class Desert extends Area
{
    function function treasure()
    {
        return 10;
    }
}
//区域类的装饰器类
abstract class AreaDecorateor extends Area
{
    protected $_area = null;

    public function __construct(Area $area)
    {
        $this->_area = $area;
    }
}

//被破坏了后的区域，价值只有之前的一半
class Damaged extends AreaDecorateor
{
    public function treasure()
    {
        return $this->_area->treasure() * 0.5;
    }
}

//现在我们来获取被破坏的森林类的价值
$damageForest = new Damaged(new Forest());
echo $damageForest->treasure();  //返回50