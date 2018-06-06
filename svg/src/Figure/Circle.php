<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-30
 * Time: 12:55
 */
namespace Svg\Figure;

class Circle implements \Svg\DrawableInterface
{
    protected $x;
    protected $y;
    protected $r;
    protected $fill;

    /**
     * Circle constructor.
     * @param $x
     * @param $y
     * @param $r
     */
    public function __construct($x, $y, $r, $fill)
    {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
        $this->fill = $fill;
    }


        public function draw()
    {
        echo '<circle cx ="'. $this->x .'" cy="'. $this->y .'" r="'. $this->r .'" fill= "'.$this->fill.'"/>';
    }

    public function getReference()
    {
        // TODO: Implement getReference() method.
    }

}