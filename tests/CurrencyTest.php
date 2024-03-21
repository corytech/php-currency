<?php

declare(strict_types=1);

namespace Corytech\Currency\Tests;

use Corytech\Currency\Currency;
use Corytech\Currency\CurrencyType;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    #[DataProvider('getDataIso4217Currency')]
    public function testIso4217(
        string $codeAlphabet,
        string $codeNumber,
        int $precision,
        string $currencyName
    ): void {
        $currency = Currency::tryFrom(strtolower($codeAlphabet));
        self::assertNotNull($currency);
        self::assertEquals(
            $codeAlphabet,
            $currency->getUpperCaseCode(),
            sprintf(
                'Alphabet code not equals expect"%s" get "%s"',
                $codeAlphabet,
                $currency->getUpperCaseCode()
            )
        );
        self::assertEquals(
            $codeNumber,
            $currency->getIso4217AheadZeroValue(),
            sprintf(
                'Number code not equals expect"%s" get "%s"',
                $codeNumber,
                $currency->getIso4217AheadZeroValue()
            )
        );
        self::assertEquals(
            $precision,
            $currency->getPrecision(),
            sprintf(
                'Precision not equals expect"%s" get "%s"',
                $precision,
                $currency->getPrecision()
            )
        );
        self::assertEquals(
            $currencyName,
            $currency->getCurrencyName(),
            sprintf(
                'Currency name not equals expect"%s" get "%s"',
                $currencyName,
                $currency->getCurrencyName()
            )
        );

        self::assertEquals(
            CurrencyType::Fiat,
            $currency->type()
        );
    }

    public function testAllCaseTypeSet(): void
    {
        foreach (Currency::cases() as $currency) {
            self::assertInstanceOf(CurrencyType::class, $currency->type());
        }
    }

    public function testAllCasePrecisionSet(): void
    {
        foreach (Currency::cases() as $currency) {
            self::assertIsNumeric($currency->getPrecision());
        }
    }

    public static function getDataIso4217Currency(): array
    {
        return [
            ['ALL', '008', 2, 'Lek'],
            ['DZD', '012', 2, 'Algerian Dinar'],
            ['ARS', '032', 2, 'Argentine Peso'],
            ['AUD', '036', 2, 'Australian Dollar'],
            ['BSD', '044', 2, 'Bahamian Dollar'],
            ['BHD', '048', 3, 'Bahraini Dinar'],
            ['BDT', '050', 2, 'Taka'],
            ['AMD', '051', 2, 'Armenian Dram'],
            ['BBD', '052', 2, 'Barbados Dollar'],
            ['BMD', '060', 2, 'Bermudian Dollar'],
            ['BTN', '064', 2, 'Ngultrum'],
            ['BOB', '068', 2, 'Boliviano'],
            ['BWP', '072', 2, 'Pula'],
            ['BZD', '084', 2, 'Belize Dollar'],
            ['SBD', '090', 2, 'Solomon Islands Dollar'],
            ['BND', '096', 2, 'Brunei Dollar'],
            ['MMK', '104', 2, 'Kyat'],
            ['BIF', '108', 0, 'Burundi Franc'],
            ['KHR', '116', 2, 'Riel'],
            ['CAD', '124', 2, 'Canadian Dollar'],
            ['CVE', '132', 2, 'Cabo Verde Escudo'],
            ['KYD', '136', 2, 'Cayman Islands Dollar'],
            ['LKR', '144', 2, 'Sri Lanka Rupee'],
            ['CLP', '152', 0, 'Chilean Peso'],
            ['CNY', '156', 2, 'Yuan Renminbi'],
            ['COP', '170', 2, 'Colombian Peso'],
            ['KMF', '174', 0, 'Comorian Franc '],
            ['CRC', '188', 2, 'Costa Rican Colon'],
            ['CUP', '192', 2, 'Cuban Peso'],
            ['CZK', '203', 2, 'Czech Koruna'],
            ['DKK', '208', 2, 'Danish Krone'],
            ['DKK', '208', 2, 'Danish Krone'],
            ['DKK', '208', 2, 'Danish Krone'],
            ['DOP', '214', 2, 'Dominican Peso'],
            ['SVC', '222', 2, 'El Salvador Colon'],
            ['ETB', '230', 2, 'Ethiopian Birr'],
            ['ERN', '232', 2, 'Nakfa'],
            ['FKP', '238', 2, 'Falkland Islands Pound'],
            ['FJD', '242', 2, 'Fiji Dollar'],
            ['DJF', '262', 0, 'Djibouti Franc'],
            ['GMD', '270', 2, 'Dalasi'],
            ['GIP', '292', 2, 'Gibraltar Pound'],
            ['GTQ', '320', 2, 'Quetzal'],
            ['GNF', '324', 0, 'Guinean Franc'],
            ['GYD', '328', 2, 'Guyana Dollar'],
            ['HTG', '332', 2, 'Gourde'],
            ['HNL', '340', 2, 'Lempira'],
            ['HKD', '344', 2, 'Hong Kong Dollar'],
            ['HUF', '348', 2, 'Forint'],
            ['ISK', '352', 0, 'Iceland Krona'],
            ['INR', '356', 2, 'Indian Rupee'],
            ['IDR', '360', 2, 'Rupiah'],
            ['IRR', '364', 2, 'Iranian Rial'],
            ['IQD', '368', 3, 'Iraqi Dinar'],
            ['ILS', '376', 2, 'New Israeli Sheqel'],
            ['JMD', '388', 2, 'Jamaican Dollar'],
            ['JPY', '392', 0, 'Yen'],
            ['KZT', '398', 2, 'Tenge'],
            ['JOD', '400', 3, 'Jordanian Dinar'],
            ['KES', '404', 2, 'Kenyan Shilling'],
            ['KPW', '408', 2, 'North Korean Won'],
            ['KRW', '410', 0, 'Won'],
            ['KWD', '414', 3, 'Kuwaiti Dinar'],
            ['KGS', '417', 2, 'Som'],
            ['LAK', '418', 2, 'Lao Kip'],
            ['LBP', '422', 2, 'Lebanese Pound'],
            ['LSL', '426', 2, 'Loti'],
            ['LRD', '430', 2, 'Liberian Dollar'],
            ['LYD', '434', 3, 'Libyan Dinar'],
            ['MOP', '446', 2, 'Pataca'],
            ['MWK', '454', 2, 'Malawi Kwacha'],
            ['MYR', '458', 2, 'Malaysian Ringgit'],
            ['MVR', '462', 2, 'Rufiyaa'],
            ['MUR', '480', 2, 'Mauritius Rupee'],
            ['MXN', '484', 2, 'Mexican Peso'],
            ['MNT', '496', 2, 'Tugrik'],
            ['MDL', '498', 2, 'Moldovan Leu'],
            ['MAD', '504', 2, 'Moroccan Dirham'],
            ['MAD', '504', 2, 'Moroccan Dirham'],
            ['OMR', '512', 3, 'Rial Omani'],
            ['NAD', '516', 2, 'Namibia Dollar'],
            ['NPR', '524', 2, 'Nepalese Rupee'],
            ['ANG', '532', 2, 'Netherlands Antillean Guilder'],
            ['ANG', '532', 2, 'Netherlands Antillean Guilder'],
            ['AWG', '533', 2, 'Aruban Florin'],
            ['VUV', '548', 0, 'Vatu'],
            ['NZD', '554', 2, 'New Zealand Dollar'],
            ['NZD', '554', 2, 'New Zealand Dollar'],
            ['NZD', '554', 2, 'New Zealand Dollar'],
            ['NZD', '554', 2, 'New Zealand Dollar'],
            ['NZD', '554', 2, 'New Zealand Dollar'],
            ['NIO', '558', 2, 'Cordoba Oro'],
            ['NGN', '566', 2, 'Naira'],
            ['NOK', '578', 2, 'Norwegian Krone'],
            ['NOK', '578', 2, 'Norwegian Krone'],
            ['NOK', '578', 2, 'Norwegian Krone'],
            ['PKR', '586', 2, 'Pakistan Rupee'],
            ['PAB', '590', 2, 'Balboa'],
            ['PGK', '598', 2, 'Kina'],
            ['PYG', '600', 0, 'Guarani'],
            ['PEN', '604', 2, 'Sol'],
            ['PHP', '608', 2, 'Philippine Peso'],
            ['QAR', '634', 2, 'Qatari Rial'],
            ['RUB', '643', 2, 'Russian Ruble'],
            ['RWF', '646', 0, 'Rwanda Franc'],
            ['SHP', '654', 2, 'Saint Helena Pound'],
            ['SAR', '682', 2, 'Saudi Riyal'],
            ['SCR', '690', 2, 'Seychelles Rupee'],
            ['SLL', '694', 2, 'Leone'],
            ['SGD', '702', 2, 'Singapore Dollar'],
            ['VND', '704', 0, 'Dong'],
            ['SOS', '706', 2, 'Somali Shilling'],
            ['ZAR', '710', 2, 'Rand'],
            ['SSP', '728', 2, 'South Sudanese Pound'],
            ['SZL', '748', 2, 'Lilangeni'],
            ['SEK', '752', 2, 'Swedish Krona'],
            ['CHF', '756', 2, 'Swiss Franc'],
            ['CHF', '756', 2, 'Swiss Franc'],
            ['SYP', '760', 2, 'Syrian Pound'],
            ['THB', '764', 2, 'Baht'],
            ['TOP', '776', 2, 'Pa’anga'],
            ['TTD', '780', 2, 'Trinidad and Tobago Dollar'],
            ['AED', '784', 2, 'UAE Dirham'],
            ['TND', '788', 3, 'Tunisian Dinar'],
            ['UGX', '800', 0, 'Uganda Shilling'],
            ['MKD', '807', 2, 'Denar'],
            ['EGP', '818', 2, 'Egyptian Pound'],
            ['GBP', '826', 2, 'Pound Sterling'],
            ['TZS', '834', 2, 'Tanzanian Shilling'],
            ['USD', '840', 2, 'US Dollar'],
            ['UYU', '858', 2, 'Peso Uruguayo'],
            ['UZS', '860', 2, 'Uzbekistan Sum'],
            ['WST', '882', 2, 'Tala'],
            ['YER', '886', 2, 'Yemeni Rial'],
            ['TWD', '901', 2, 'New Taiwan Dollar'],
            ['SLE', '925', 2, 'Leone'],
            ['VED', '926', 2, 'Bolívar Soberano'],
            ['UYW', '927', 4, 'Unidad Previsional'],
            ['VES', '928', 2, 'Bolívar Soberano'],
            ['MRU', '929', 2, 'Ouguiya'],
            ['STN', '930', 2, 'Dobra'],
            ['CUC', '931', 2, 'Peso Convertible'],
            ['ZWL', '932', 2, 'Zimbabwe Dollar'],
            ['BYN', '933', 2, 'Belarusian Ruble'],
            ['TMT', '934', 2, 'Turkmenistan New Manat'],
            ['GHS', '936', 2, 'Ghana Cedi'],
            ['SDG', '938', 2, 'Sudanese Pound'],
            ['UYI', '940', 0, 'Uruguay Peso en Unidades Indexadas (UI)'],
            ['RSD', '941', 2, 'Serbian Dinar'],
            ['MZN', '943', 2, 'Mozambique Metical'],
            ['AZN', '944', 2, 'Azerbaijan Manat'],
            ['RON', '946', 2, 'Romanian Leu'],
            ['CHE', '947', 2, 'WIR Euro'],
            ['CHW', '948', 2, 'WIR Franc'],
            ['TRY', '949', 2, 'Turkish Lira'],
            ['XAF', '950', 0, 'CFA Franc BEAC'],
            ['XCD', '951', 2, 'East Caribbean Dollar'],
            ['XOF', '952', 0, 'CFA Franc BCEAO'],
            ['XPF', '953', 0, 'CFP Franc'],
            ['XDR', '960', 17, 'SDR (Special Drawing Right)'],
            ['XUA', '965', 17, 'ADB Unit of Account'],
            ['ZMW', '967', 2, 'Zambian Kwacha'],
            ['SRD', '968', 2, 'Surinam Dollar'],
            ['MGA', '969', 2, 'Malagasy Ariary'],
            ['COU', '970', 2, 'Unidad de Valor Real'],
            ['AFN', '971', 2, 'Afghani'],
            ['TJS', '972', 2, 'Somoni'],
            ['AOA', '973', 2, 'Kwanza'],
            ['BGN', '975', 2, 'Bulgarian Lev'],
            ['CDF', '976', 2, 'Congolese Franc'],
            ['BAM', '977', 2, 'Convertible Mark'],
            ['EUR', '978', 2, 'Euro'],
            ['MXV', '979', 2, 'Mexican Unidad de Inversion (UDI)'],
            ['UAH', '980', 2, 'Hryvnia'],
            ['GEL', '981', 2, 'Lari'],
            ['BOV', '984', 2, 'Mvdol'],
            ['PLN', '985', 2, 'Zloty'],
            ['BRL', '986', 2, 'Brazilian Real'],
            ['CLF', '990', 4, 'Unidad de Fomento'],
            ['XSU', '994', 17, 'Sucre'],
            ['USN', '997', 2, 'US Dollar (Next day)'],
        ];
    }
}
