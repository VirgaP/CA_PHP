<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-30
 * Time: 15:28
 */

namespace Svg\Figure;


use Svg\DrawableInterface;

class Triangle extends TagableFigure
{

    protected $point1x;

    protected $point1y;

    protected $point2x;

    protected $point2y;

    protected $point3x;

    protected $point3y;

    protected $fill;



//    protected $fill;


    /**
     * Triangle constructor.
     * @param $point1x
     * @param $point1y
     * @param $point2x
     * @param $point2y
     * @param $point3x
     * @param $point3y
     */
    public function __construct($point1x, $point1y, $point2x, $point2y, $point3x, $point3y, $fill)
    {
        $this->point1x = $point1x;
        $this->point1y = $point1y;
        $this->point2x = $point2x;
        $this->point2y = $point2y;
        $this->point3x = $point3x;
        $this->point3y = $point3y;
        $this->fill = $fill;
        $this->tagName = 'polygon';
        $this->attributes = [
            'points'=>$point1x . ',' .$point1y . ' '.$point2x . ',' .$point2y.' '.$point3x.','.$point3y,
            'style' =>'fill:' . $fill,
        ];
    }


//    public function draw()
//    {
//        echo '<polygon points= " ' . $this->point1x . ' '. $this->point1y .' '. $this->point2x .' ' . $this->point2y . ' ' . $this->point3x . ' ' . $this->point3y . ' " style=" fill:
//         '. $this->fill . ' "  />';
//    }

}