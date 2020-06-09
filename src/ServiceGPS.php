<?php
class ServiceGPS implements ServiceInterface
{
    private $pricePerHour = 15;

    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->pricePerHour * $hours;
    }
}