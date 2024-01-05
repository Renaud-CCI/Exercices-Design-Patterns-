<?php 

namespace App\Factory\Shapes;

use App\Factory\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface 
{
	public function draw() {
		$img = imagecreatetruecolor(400, 300);
		$bg = imagecolorallocate($img, 255, 255, 100);
		imagefill($img, 0, 0, $bg);
		$color_rectangle = imagecolorallocate($img, 0, 0, 0);
		imagerectangle($img, 50, 50, 350, 250, $color_rectangle);
		imagepng($img, './rectangle.png');
		imagedestroy($img);
  }
}