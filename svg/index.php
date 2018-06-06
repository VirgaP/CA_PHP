<?php
function my_autoloader ($name) {

    $path = 'src\\'.$name. '.php';
    $x = explode('\\', $path);
    unset($x[1]);
    $path=implode('\\',$x);

    if (!is_file($path)){
        return;
    }
    require_once $path;
}

spl_autoload_register('my_autoloader');

use Svg\Figure\Circle;
use Svg\Figure\NewPicture;
use Svg\Figure\Rectangular;
use Svg\Picture;
use Svg\Figure\Trapeze;

//$circle = new Circle(10, 10, 5);
//$circle1 = new Circle(20, 20, 10);
//echo '<svg width="200" height="200">';
//$circle->draw();
//$circle1->draw();
//$pic = new Picture(300, 300);
//$pic->draw();
//
//$pic2 = new Picture(300, 300);
//$pic2->draw();

$new = new NewPicture(500, 500);
$new->draw();



//
//echo '<svg width="200" height="200">';
//$rect->draw();
//echo '</svg>';