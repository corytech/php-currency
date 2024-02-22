<?php

declare(strict_types=1);

namespace Corytech\Currency;

enum CurrencyType: string
{
    case Crypto = 'crypto';
    case Fiat = 'fiat';
}
