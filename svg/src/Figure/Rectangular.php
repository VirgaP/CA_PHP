<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-30
 * Time: 14:12
 */

namespace Svg\Figure;


class Rectangular implements \Svg\DrawableInterface
{
    protected $x;
    protected $y;
    protected $width;
    protected $height;
    protected $fill;

    /**
     * Rectangular constructor.
     * @param $x
     * @param $y
     * @param $width
     * @param $height
     * @param $fill
     *
     */
    public function __construct($x, $y, $width, $height, $fill)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
        $this->fill = $fill;
    }


    public function draw() {
        echo '<rect x =" '. $this->x .' " y="'. $this->y .' " width =" ' . $this->width . '" height=" ' . $this->height . '" style=" fill:
         '. $this->fill . ' " />';
    }
    public function getReference() {
         // TODO: Implement getReference() method.
    }
}