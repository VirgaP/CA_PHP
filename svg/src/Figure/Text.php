<?php
/**
 * Created by PhpStorm.
 * User: ca_php_2s11
 * Date: 2018-05-31
 * Time: 10:16
 */

namespace Svg\Figure;


use Svg\DrawableInterface;

class Text implements DrawableInterface
{

    protected $x;
    protected $y;
    protected $fill;
    protected $transform;
    protected $text = 'figure';

    /**
     * Text constructor.
     * @param $x
     * @param $y
     * @param $fill
     * @param $transform
     * @param $text
     */
    public function __construct($x, $y, $fill, $text, $transform=null)
    {
        $this->x = $x;
        $this->y = $y;
        $this->fill = $fill;
        $this->transform = $transform;
        $this->text = $text;
    }

        public function draw()
    {
       echo  '<text x="'. $this->x .' " y="' . $this->y .'" fill="'. $this->fill .'">'. $this->text . '</text>';

    }

    public function getReference()
    {
        // TODO: Implement getReference() method.
    }

}