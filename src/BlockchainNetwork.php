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
    case Cardano = 'cardano';
    case Eip155_10 = 'eip155:10';
    case Eip155_137 = 'eip155:137';
    case Eip155_8453 = 'eip155:8453';
    case Eip155_42161 = 'eip155:42161';

    public static function getValues(): array
    {
        return array_map(static fn(self $n) => $n->value, self::cases());
    }

    public function isTagOrMemoRequired(): bool
    {
        return match ($this) {
            self::Stellar, self::Cardano => true,
            default => false,
        };
    }
}
