<?php

declare(strict_types=1);

namespace Corytech\Currency\Helper;

use Corytech\Currency\BlockchainNetwork;
use Corytech\Currency\Currency;

final class ExplorerUrlHelper
{
    private const URL_PATTERNS = [
        Currency::BTC->value => [
            null => 'https://blockchain.com/btc/tx/{id}',
        ],
        Currency::ETH->value => [
            null => 'https://etherscan.io/tx/{id}',
        ],
        Currency::LTC->value => [
            null => 'https://blockchair.com/litecoin/transaction/{id}',
        ],
        Currency::XLM->value => [
            null => 'https://stellar.expert/explorer/public/tx/{id}',
        ],
        Currency::XRP->value => [
            null => 'https://bithomp.com/explorer/{id}',
        ],
        Currency::TRX->value => [
            null => 'https://tronscan.org/#/transaction/{id}',
        ],
        Currency::XMR->value => [
            null => 'https://localmonero.co/blocks/tx/{id}',
        ],
        Currency::USDT->value => [
            BlockchainNetwork::Erc20->value => 'https://etherscan.io/tx/{id}',
            BlockchainNetwork::Trc20->value => 'https://tronscan.org/#/transaction/{id}',
            BlockchainNetwork::Sol->value => 'https://explorer.solana.com/tx/{id}',
        ],
        Currency::USDC->value => [
            BlockchainNetwork::Erc20->value => 'https://etherscan.io/tx/{id}',
            BlockchainNetwork::Trc20->value => 'https://tronscan.org/#/transaction/{id}',
            BlockchainNetwork::Sol->value => 'https://explorer.solana.com/tx/{id}',
        ],
    ];

    public static function getBlockchainExplorerUrl(
        string $txId,
        Currency $currency,
        ?BlockchainNetwork $blockchainNetwork,
    ): ?string {
        $pattern = self::URL_PATTERNS[$currency->value][$blockchainNetwork?->value] ?? null;

        if (!$pattern) {
            return null;
        }

        return (string) str_replace('{id}', $txId, $pattern);
    }
}
