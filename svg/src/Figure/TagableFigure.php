<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-06-01
 * Time: 10:13
 */

namespace Svg\Figure;


use Svg\DrawableInterface;

abstract class TagableFigure implements DrawableInterface
{
    protected $tagName;
    protected $attributes;

    public function draw()
    {
       echo "<{$this->tagName}";
       foreach ($this->attributes as $key=>$attribute) {
           echo ' ' . $key . '=' . ' "'. $attribute . '"';
       }
       echo '/>';
    }

    public function getReference()
    {
        // TODO: Implement getReference() method.
    }


}