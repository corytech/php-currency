<?php

declare(strict_types=1);

namespace Corytech\Currency;

enum BlockchainNetwork: string
{
    case Erc20 = 'erc20';
    case Trc20 = 'trc20';
    case Bep20 = 'bep20';
    case Bep2 = 'bep2';
    case Sol = 'sol';
    case Base = 'base';
    case Optimism = 'optimism';
    case Arbitrum = 'arbitrum';
    case Stellar = 'stellar';

    public static function getValues(): array
    {
        return array_map(static fn (self $n) => $n->value, self::cases());
    }

    public function isTagOrMemoRequired(): bool
    {
        return match ($this) {
            self::Stellar => true,
            default => false,
        };
    }
}
