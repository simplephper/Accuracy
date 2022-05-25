<?php


namespace Simplephper;

/**
 * 精度计算类
 * Class Accuracy
 */
class Accuracy
{
    /**
     * 基数
     * @var int
     */
    protected $baseNumber = 0;

    /**
     * 精确到小数点几位
     * @var int
     */
    protected $accuracy = 2;

    /**
     * 初始化
     * @param int $baseNumber 基数
     * @param int $accuracy 精确到小数点几位
     */
    public function __construct($baseNumber, $accuracy = 2){
        $this->baseNumber = $baseNumber;
        $this->accuracy = $accuracy;
        return $this;
    }

    /**
     * 加法
     * @param $num
     * @return $this
     */
    public function add($num){
        $this->baseNumber = bcadd($this->baseNumber, $num, $this->accuracy);
        return $this;
    }

    /**
     * 减法
     * @param $num
     * @return $this
     */
    public function sub($num){
        $this->baseNumber = bcsub($this->baseNumber, $num, $this->accuracy);
        return $this;
    }

    /**
     * 除法
     * @param $num
     * @return $this
     */
    public function div($num){
        $this->baseNumber = bcdiv($this->baseNumber, $num, $this->accuracy);
        return $this;
    }

    /**
     * 乘法
     * @param $num
     * @return $this
     */
    public function mul($num){
        $this->baseNumber = bcmul($this->baseNumber, $num, $this->accuracy);
        return $this;
    }

    /**
     * 返回结果
     * @param bool $is_number 是否为数字
     * @return float|int
     */
    public function result($is_number = true){
        if($is_number){
            return floatval($this->baseNumber);
        }
        return $this->baseNumber;
    }

}