<?php

declare(strict_types=1);

namespace Corytech\Currency\Helper;

use Corytech\Currency\BlockchainNetwork;
use Corytech\Currency\Currency;

final class ExplorerUrlHelper
{
    private const BLOCKCHAIN_NETWORK_URL_PATTERNS = [
        BlockchainNetwork::Erc20->value => 'https://etherscan.io/tx/{id}',
        BlockchainNetwork::Trc20->value => 'https://tronscan.org/#/transaction/{id}',
        BlockchainNetwork::Bep20->value => 'https://bscscan.com/tx/{id}',
        BlockchainNetwork::Bep2->value => 'https://explorer.bnbchain.org/tx/{id}',
        BlockchainNetwork::Sol->value => 'https://explorer.solana.com/tx/{id}',
        BlockchainNetwork::Base->value => 'https://basescan.org/tx/{id}',
        BlockchainNetwork::Optimism->value => 'https://optimistic.etherscan.io/tx/{id}',
        BlockchainNetwork::Arbitrum->value => 'https://arbiscan.io/tx/{id}',
        BlockchainNetwork::Stellar->value => 'https://stellarchain.io/tx/{id}',
        BlockchainNetwork::Cardano->value => 'https://cardanoscan.io/transaction/{id}',
        BlockchainNetwork::Eip155_10->value => 'https://optimistic.etherscan.io/tx/{id}',
        BlockchainNetwork::Eip155_137->value => 'https://polygonscan.com/tx/{id}',
        BlockchainNetwork::Eip155_8453->value => 'https://basescan.org/tx/{id}',
        BlockchainNetwork::Eip155_42161->value => 'https://arbiscan.io/tx/{id}',
    ];

    private const URL_PATTERNS = [
        Currency::BCH->value => 'https://blockchair.com/bitcoin-cash/transaction/{id}',
        Currency::BTC->value => 'https://blockchain.com/btc/tx/{id}',
        Currency::ETH->value => 'https://etherscan.io/tx/{id}',
        Currency::LTC->value => 'https://blockchair.com/litecoin/transaction/{id}',
        Currency::XLM->value => 'https://stellar.expert/explorer/public/tx/{id}',
        Currency::XRP->value => 'https://bithomp.com/explorer/{id}',
        Currency::TRX->value => 'https://tronscan.org/#/transaction/{id}',
        Currency::BNB->value => 'https://bscscan.com/tx/{id}',
        Currency::ARB->value => 'https://arbiscan.io/tx/{id}',
        Currency::OP->value => 'https://optimistic.etherscan.io/tx/{id}',
        Currency::BASE->value => 'https://basescan.org/tx/{id}',
        Currency::ADA->value => 'https://cardanoscan.io/transaction/{id}',
        Currency::MATIC->value => 'https://polygonscan.com/tx/{id}',
        Currency::TON->value => 'https://explorer.toncoin.org/transaction/{id}',
        Currency::SOL->value => 'https://explorer.solana.com/tx/{id}',
    ];

    public static function getBlockchainExplorerUrl(
        string $txId,
        Currency $currency,
        ?BlockchainNetwork $blockchainNetwork,
    ): ?string {
        if ($blockchainNetwork) {
            $pattern = self::BLOCKCHAIN_NETWORK_URL_PATTERNS[$blockchainNetwork->value] ?? null;
        } else {
            $pattern = self::URL_PATTERNS[$currency->value] ?? null;
        }
        if (!$pattern) {
            return null;
        }

        return (string) str_replace('{id}', $txId, $pattern);
    }
}
