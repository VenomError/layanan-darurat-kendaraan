<?php

namespace App\Enum;

enum ServiceRequestStatus
{
    case pending;
    case accepted;
    case otw;
    case completed;
    case cancelled;
}
