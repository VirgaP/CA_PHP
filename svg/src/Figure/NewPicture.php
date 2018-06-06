<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-06-01
 * Time: 14:10
 */

namespace Svg\Figure;


use Svg\Picture;

class NewPicture extends Picture
{
      /**
     * NewPicture constructor.
     * @param $canvasWidth
     * @param $canvasHeight
     */
    public function __construct($canvasWidth, $canvasHeight)
    {
        $this->canvasWidth = $canvasWidth;
        $this->canvasHeight = $canvasHeight;
        $this->figures = [
            new Trapeze(150, 250, 250, 200, 320, 'red'),
            new Text(120,50, 'black','trapecija'),
            new Circle(150, 150, 60, 'orange'),
        ];
    }


}