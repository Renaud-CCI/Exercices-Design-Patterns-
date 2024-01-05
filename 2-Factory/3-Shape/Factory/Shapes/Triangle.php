<?php 

namespace App\Factory\Shapes;

use App\Factory\Interfaces\ShapeInterface;

class Triangle implements ShapeInterface 
{
    public function draw() {
        $img = imagecreatetruecolor(400, 400);
        $bg = imagecolorallocate($img, 255, 255, 100);
        imagefill($img, 0, 0, $bg);
        $color_triangle = imagecolorallocate($img, 0, 0, 0);
        $points = array(200, 50, 50, 350, 350, 350);
        imagepolygon($img, $points, 3, $color_triangle);
        imagepng($img, './triangle.png');
        imagedestroy($img);
    }
}