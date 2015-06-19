<?php

interface Beverage
{
    public function getAlcohol();
}

class BeverageFactory
{
    public static function getBeverage($type)
    {
        switch ($type) {
            case 'beer':
                $beverage = new Beer();
                break;
            case 'wine':
                $beverage = new Wine();
                break;
            default:
                throw new InvalidArgumentException('Beverage type not valid');
        }

        return $beverage;
    }
}

class Wine implements Beverage
{
    public function getAlcohol()
    {
        return 12;
    }
}

class Beer implements Beverage
{
    public function getAlcohol()
    {
        return 5;
    }
}

$beer = BeverageFactory::getBeverage('beer');
printf("The alcohol of beer is %d degrees.\n", $beer->getAlcohol());

$wine = BeverageFactory::getBeverage('wine');
printf("The alcohol of wine is %d degrees.\n", $wine->getAlcohol());

$pastis = BeverageFactory::getBeverage('pastis');
printf("The alcohol of pastis is %d degrees.\n", $pastis->getAlcohol());
