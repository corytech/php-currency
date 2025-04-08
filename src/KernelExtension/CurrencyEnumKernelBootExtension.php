<?php

declare(strict_types=1);

namespace Corytech\Currency\KernelExtension;

use Corytech\Currency\Doctrine\Type\DoctrineCurrencyEnumType;
use Doctrine\DBAL\Types\Type;

class CurrencyEnumKernelBootExtension
{
    public static function load(): void
    {
        if (Type::hasType(DoctrineCurrencyEnumType::TYPE_NAME)) {
            return;
        }

        Type::addType(
            DoctrineCurrencyEnumType::TYPE_NAME,
            DoctrineCurrencyEnumType::class
        );
    }
}
