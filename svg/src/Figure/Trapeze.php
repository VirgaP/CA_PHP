<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-31
 * Time: 10:07
 */

namespace Svg\Figure;


use Svg\DrawableInterface;
use Svg\Figure\Triangle;
use Svg\Figure\Rectangular;
use Svg\Picture;
use Svg\Figure\ComplexFigure;

class Trapeze extends ComplexFigure
{

    protected $startPointX;
    protected $startPointY;
    protected $height;
    protected $widthUpper;
    protected $widthBottom;
    protected $triBase;
    protected $fill;
    protected $figures;

    /**
     * Trapeze constructor.
     * @param $startPointX
     * @param $startPointY
     * @param $height
     * @param $widthUpper
     * @param $widthBottom
     * @param $fill
     */
    public function __construct($startPointX, $startPointY, $height, $widthUpper, $widthBottom, $fill)
    {
        $this->startPointX = $startPointX;
        $this->startPointY = $startPointY;
        $this->height = $height;
        $this->widthUpper = $widthUpper;
        $this->widthBottom = $widthBottom;
        $this->triBase = ($widthBottom - $widthUpper)/2;
        $this->fill = $fill;
        $this->figures = [
            $this->calculateTriangle1(),
            $this->calculateTriangle2(),
            $this->calculateRectangle(),
            ]
        ;
    }

    public function calculateTriangle1()
    {
        $x1 = $this->startPointX;
        $y1 = $this->startPointY;

        $x2 = $this->startPointX + $this->triBase;
        $y2 = $this->startPointY;

        $x3 = $x2;
        $y3 = $this->startPointY - $this->height;

        return new Triangle($x1, $y1, $x2, $y2, $x3, $y3, $this->fill);
    }

    public function calculateRectangle()
    {
        $x4 = $this->startPointX + $this->triBase;
        $y4 = $this->startPointY - $this->height;

        $width = $this->widthUpper;
        $height = $this->height;

        return new Rectangular($x4, $y4, $width, $height, $this->fill);
    }

    public function calculateTriangle2()
    {
        $x5 = $this->startPointX + $this->triBase + $this->widthUpper;
        $y5 = $this->startPointY;

        $x6 = $x5;
        $y6 = $this->startPointY - $this->height;

        $x7 = $x5 + $this->triBase;
        $y7 = $y5;
        return new Triangle($x5, $y5, $x6, $y6, $x7, $y7, $this->fill);
    }


}