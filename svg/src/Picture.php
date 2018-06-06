<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-30
 * Time: 12:59
 */
namespace Svg;
use Svg\Figure\ComplexFigure;
use Svg\Figure\Rectangular;
use Svg\Figure\Circle;
use Svg\Figure\Text;
use Svg\Figure\Trapeze;
use Svg\Figure\Triangle;

abstract class Picture extends ComplexFigure
{

    protected $canvasWidth;
    protected $canvasHeight;

    public function draw()
    {

        echo '<svg width =" '. $this->canvasWidth .' " height="'. $this->canvasHeight .' " >';
        parent::draw();
        echo '</svg>';


    }

    public function getReference()
    {
        // TODO: Implement getReference() method.
    }



}