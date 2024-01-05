<?php 

namespace App\Factory;
use App\Exceptions\ShapeUnknownException;
use App\Factory\Shapes\Circle;
use App\Factory\Shapes\Rectangle;
use App\Factory\Shapes\Triangle;
use App\Factory\Interfaces\ShapeFactoryInterface;

class ShapeFactory implements ShapeFactoryInterface {

	public static function build($shape)
	{
		switch ($shape) {
			case 'circle':
					return new Circle();
			case 'rectangle':
					return new Rectangle();
			case 'triangle':
					return new Triangle();
			default:
					throw new ShapeUnknownException("Unknown shape type: $shape");
	}
	}
}