<?php



use App\Factory\ShopingCartFramework\Shop;
use App\Factory\MyCompanyShop\MyShopProductFactory;
    
$shop = new Shop(new MyShopProductFactory);

$productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

$targetOutput = <<<EOS
BumperSticker1 - Cool bumper sticker
CoffeeTableBook5 - Coffee Table book
EOS;

assert($targetOutput == $shop->listProducts($productsToList));
?>

<h1>Factory Method</h1>