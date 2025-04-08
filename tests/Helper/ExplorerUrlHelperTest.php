<?php

declare(strict_types=1);

namespace Corytech\Currency\Tests\Helper;

use Corytech\Currency\BlockchainNetwork;
use Corytech\Currency\Currency;
use Corytech\Currency\CurrencyType;
use Corytech\Currency\Helper\ExplorerUrlHelper;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ExplorerUrlHelperTest extends TestCase
{
    public static function getAllPossibleCases(): iterable
    {
        foreach (Currency::getCryptoCurrencies() as $currency) {
            if ($currency->isBlockchainNetworkRequired()) {
                foreach (BlockchainNetwork::cases() as $blockchainNetwork) {
                    yield $currency->value.'_'.$blockchainNetwork->value => [$currency, $blockchainNetwork];
                }
            }
        }
    }

    #[DataProvider('getAllPossibleCases')]
    public function testGetBlockchainExplorerUrlWillReturnValueForAllPossibleCases(
        Currency $currency,
        ?BlockchainNetwork $blockchainNetwork,
    ): void {
        self::assertNotNull(
            ExplorerUrlHelper::getBlockchainExplorerUrl('123', $currency, $blockchainNetwork),
            'Every crypto transaction should have explorer url'
        );
    }

    public static function getDataProvider(): iterable
    {
        return [
            [
                Currency::EUR,
                null,
                '12345',
                null,
            ],
            [
                Currency::BTC,
                null,
                '12345',
                'https://blockchain.com/btc/tx/12345',
            ],
            [
                Currency::ETH,
                null,
                '12345',
                'https://etherscan.io/tx/12345',
            ],
            [
                Currency::LTC,
                null,
                '12345',
                'https://blockchair.com/litecoin/transaction/12345',
            ],
            [
                Currency::XLM,
                null,
                '12345',
                'https://stellar.expert/explorer/public/tx/12345',
            ],
            [
                Currency::XRP,
                null,
                '12345',
                'https://bithomp.com/explorer/12345',
            ],
            [
                Currency::TRX,
                null,
                '12345',
                'https://tronscan.org/#/transaction/12345',
            ],
            [
                Currency::XMR,
                null,
                '12345',
                'https://localmonero.co/blocks/tx/12345',
            ],
            [
                Currency::USDT,
                BlockchainNetwork::Erc20,
                '12345',
                'https://etherscan.io/tx/12345',
            ],
            [
                Currency::USDC,
                BlockchainNetwork::Erc20,
                '12345',
                'https://etherscan.io/tx/12345',
            ],
            [
                Currency::USDT,
                BlockchainNetwork::Trc20,
                '12345',
                'https://tronscan.org/#/transaction/12345',
            ],
            [
                Currency::USDC,
                BlockchainNetwork::Trc20,
                '12345',
                'https://tronscan.org/#/transaction/12345',
            ],
            [
                Currency::USDT,
                BlockchainNetwork::Sol,
                '12345',
                'https://explorer.solana.com/tx/12345',
            ],
            [
                Currency::USDC,
                BlockchainNetwork::Sol,
                '12345',
                'https://explorer.solana.com/tx/12345',
            ],
        ];
    }

    #[DataProvider('getDataProvider')]
    public function testGetBlockchainExplorerUrl(
        Currency $currency,
        ?BlockchainNetwork $blockchainNetwork,
        string $txId,
        ?string $expectedUrl,
    ): void {
        self::assertEquals($expectedUrl, ExplorerUrlHelper::getBlockchainExplorerUrl($txId, $currency, $blockchainNetwork));
    }

    #[DataProvider('getAllPossibleCases')]
    public function testEveryPossibleCaseCovered(
        Currency $currency,
        ?BlockchainNetwork $blockchainNetwork,
    ): void {
        foreach (self::getDataProvider() as $case) {
            if ($case[0] === $currency && $case[1] === $blockchainNetwork) {
                self::assertTrue(true);

                return;
            }
        }
        self::fail('Case '.$currency->value.' '.$blockchainNetwork->value.' should be covered');
    }
}