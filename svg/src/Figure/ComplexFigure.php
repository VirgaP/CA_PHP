<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-06-01
 * Time: 13:33
 */

namespace Svg\Figure;


use Svg\DrawableInterface;

abstract class ComplexFigure implements DrawableInterface
{
    protected $figures;

    public function draw()
    {
        foreach($this->figures as $figure) {
            $figure->draw();
        }
    }

    public function getReference()
    {
        // TODO: Implement getReference() method.
    }

}