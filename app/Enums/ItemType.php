<?php

namespace App\Enums;

enum ItemType: Int
{
    case API = 1;
    case SCRAPE = 2;
    case SUBMISSION = 3;
}
