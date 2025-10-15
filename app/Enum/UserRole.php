<?php

namespace App\Enum;

enum UserRole: string
{
    case PUBLIC = 'public user';
    case BENGKEL = 'admin bengkel';
    case ADMIN = 'admin';

    public static function values()
    {
        return array_values(self::cases());
    }
}
