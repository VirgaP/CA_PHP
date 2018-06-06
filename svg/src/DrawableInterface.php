<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-30
 * Time: 12:56
 */
namespace Svg;

interface DrawableInterface
{
    public function draw();

    public function getReference();
}