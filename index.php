<?php

include "src/TariffInterface.php";
include "src/ServiceInterface.php";
include "src/TariffAbstract.php";
include "src/TariffBasic.php";
include "src/ServiceGPS.php";
include "src/ServiceDriver.php";
include "src/TariffHour.php";
include "src/TariffStudents.php";

/** @var TariffInterface $tariff */

//базовый тариф с добавлением услуги GPS

$tariff_basic = new TariffBasic(5, 60);
$tariff_b = $tariff_basic->countPrice();

$service_gps = $tariff_basic->addService(new ServiceGPS(15));
$serv_gps = $service_gps->countPrice();

echo '1. Тариф базовый(5 км, 1 час). <br> стоимость = ' . $tariff_b . ' рублей <br> - если добавить услугу GPS, <br> стоимость = ' . $serv_gps . ' рублей <br><br>';

//тариф почасовой с добавлением услуги водителя

$tariff_hour = new TariffHour(5, 60);
$tariff_h = $tariff_hour->countPrice();

$service_driver = $tariff_hour->addService(new ServiceDriver(100));
$serv_driver = $service_driver->countPrice();

echo '2. Тариф часовой(5 км, 1 час). <br> стоимость = ' . $tariff_h . ' рублей <br> - если добавить услугу GPS, <br> стоимость = ' . $serv_driver . ' рублей <br><br>';

//тариф студенческий

$tariff_students = new TariffStudents(5, 60);
$tariff_s = $tariff_students->countPrice();

echo '3. Тариф студенческий(5 км, 1 час). <br> стоимость = ' . $tariff_s . ' рублей <br>';
