<?php

namespace App\Enums;

enum Role: int
{
    case SuperAdministrator = 1;
    case veterinarian = 2;
    case Casheir = 3;
    case MarketingManager = 4;
    case SalesManager = 5;
    case Pet = 6;
    case Customer = 7;
}