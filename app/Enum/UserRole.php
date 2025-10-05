<?php

namespace App\Enum;

enum UserRole: string
{
    case PUBLIC = 'public user';
    case BENGKEL = 'admin bengkel';
    case ADMIN = 'admin';
}
