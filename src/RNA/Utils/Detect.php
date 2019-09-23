<?php
declare(strict_types=1);

namespace RNA\Utils;

use IsoCodes\Siret;

class Detect
{
    public static function isRna(string $code): bool
    {
        return preg_match('/^(W)[0-9A-Z]{9}$/', $code) > 0;
    }

    public static function isSiret(string $code): bool
    {
        try {
            return Siret::validate($code);
        } catch (\Exception $e) {
            return false;
        }
    }
}
