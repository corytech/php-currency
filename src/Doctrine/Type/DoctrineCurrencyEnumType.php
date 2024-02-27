<?php

declare(strict_types=1);

namespace Corytech\Currency\Doctrine\Type;

use Corytech\Currency\Currency;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class DoctrineCurrencyEnumType extends Type
{
    public const TYPE_NAME = 'currency_enum';
    private const TYPE_LENGTH = 16;

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        $column['length'] = self::TYPE_LENGTH;

        return $platform->getStringTypeDeclarationSQL($column);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?Currency
    {
        if ($value === null) {
            return null;
        }

        return Currency::tryFrom($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?string
    {
        if ($value instanceof Currency) {
            return $value->getCode();
        }

        return $value;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform): bool
    {
        return true;
    }

    public function getName(): string
    {
        return self::TYPE_NAME;
    }
}
