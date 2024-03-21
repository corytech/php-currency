<?php

declare(strict_types=1);

namespace Corytech\Currency;

enum Currency: string
{
    // fiat.
    case AFN = 'afn';
    case EUR = 'eur';
    case ALL = 'all';
    case DZD = 'dzd';
    case USD = 'usd';
    case AOA = 'aoa';
    case XCD = 'xcd';
    case ARS = 'ars';
    case AMD = 'amd';
    case AWG = 'awg';
    case AUD = 'aud';
    case AZN = 'azn';
    case BSD = 'bsd';
    case BHD = 'bhd';
    case BDT = 'bdt';
    case BBD = 'bbd';
    case BYN = 'byn';
    case BZD = 'bzd';
    case XOF = 'xof';
    case BMD = 'bmd';
    case INR = 'inr';
    case BTN = 'btn';
    case BOB = 'bob';
    case BOV = 'bov';
    case BAM = 'bam';
    case BWP = 'bwp';
    case NOK = 'nok';
    case BRL = 'brl';
    case BND = 'bnd';
    case BGN = 'bgn';
    case BIF = 'bif';
    case CVE = 'cve';
    case KHR = 'khr';
    case XAF = 'xaf';
    case CAD = 'cad';
    case KYD = 'kyd';
    case CLP = 'clp';
    case CLF = 'clf';
    case CNY = 'cny';
    case COP = 'cop';
    case COU = 'cou';
    case KMF = 'kmf';
    case CDF = 'cdf';
    case NZD = 'nzd';
    case CRC = 'crc';
    case CUP = 'cup';
    case CUC = 'cuc';
    case ANG = 'ang';
    case CZK = 'czk';
    case DKK = 'dkk';
    case DJF = 'djf';
    case DOP = 'dop';
    case EGP = 'egp';
    case SVC = 'svc';
    case ERN = 'ern';
    case SZL = 'szl';
    case ETB = 'etb';
    case FKP = 'fkp';
    case FJD = 'fjd';
    case XPF = 'xpf';
    case GMD = 'gmd';
    case GEL = 'gel';
    case GHS = 'ghs';
    case GIP = 'gip';
    case GTQ = 'gtq';
    case GBP = 'gbp';
    case GNF = 'gnf';
    case GYD = 'gyd';
    case HTG = 'htg';
    case HNL = 'hnl';
    case HKD = 'hkd';
    case HUF = 'huf';
    case ISK = 'isk';
    case IDR = 'idr';
    case XDR = 'xdr';
    case IRR = 'irr';
    case IQD = 'iqd';
    case ILS = 'ils';
    case JMD = 'jmd';
    case JPY = 'jpy';
    case JOD = 'jod';
    case KZT = 'kzt';
    case KES = 'kes';
    case KPW = 'kpw';
    case KRW = 'krw';
    case KWD = 'kwd';
    case KGS = 'kgs';
    case LAK = 'lak';
    case LBP = 'lbp';
    case LSL = 'lsl';
    case ZAR = 'zar';
    case LRD = 'lrd';
    case LYD = 'lyd';
    case CHF = 'chf';
    case MOP = 'mop';
    case MKD = 'mkd';
    case MGA = 'mga';
    case MWK = 'mwk';
    case MYR = 'myr';
    case MVR = 'mvr';
    case MRU = 'mru';
    case MUR = 'mur';
    case XUA = 'xua';
    case MXN = 'mxn';
    case MXV = 'mxv';
    case MDL = 'mdl';
    case MNT = 'mnt';
    case MAD = 'mad';
    case MZN = 'mzn';
    case MMK = 'mmk';
    case NAD = 'nad';
    case NPR = 'npr';
    case NIO = 'nio';
    case NGN = 'ngn';
    case OMR = 'omr';
    case PKR = 'pkr';
    case PAB = 'pab';
    case PGK = 'pgk';
    case PYG = 'pyg';
    case PEN = 'pen';
    case PHP = 'php';
    case PLN = 'pln';
    case QAR = 'qar';
    case RON = 'ron';
    case RUB = 'rub';
    case RWF = 'rwf';
    case SHP = 'shp';
    case WST = 'wst';
    case STN = 'stn';
    case SAR = 'sar';
    case RSD = 'rsd';
    case SCR = 'scr';
    case SLL = 'sll';
    case SLE = 'sle';
    case SGD = 'sgd';
    case XSU = 'xsu';
    case SBD = 'sbd';
    case SOS = 'sos';
    case SSP = 'ssp';
    case LKR = 'lkr';
    case SDG = 'sdg';
    case SRD = 'srd';
    case SEK = 'sek';
    case CHE = 'che';
    case CHW = 'chw';
    case SYP = 'syp';
    case TWD = 'twd';
    case TJS = 'tjs';
    case TZS = 'tzs';
    case THB = 'thb';
    case TOP = 'top';
    case TTD = 'ttd';
    case TND = 'tnd';
    case TRY = 'try';
    case TMT = 'tmt';
    case UGX = 'ugx';
    case UAH = 'uah';
    case AED = 'aed';
    case USN = 'usn';
    case UYU = 'uyu';
    case UYI = 'uyi';
    case UYW = 'uyw';
    case UZS = 'uzs';
    case VUV = 'vuv';
    case VES = 'ves';
    case VED = 'ved';
    case VND = 'vnd';
    case YER = 'yer';
    case ZMW = 'zmw';
    case ZWL = 'zwl';

    // crypto
    case BCH = 'bch';
    case BTC = 'btc';
    case ETH = 'eth';
    case LTC = 'ltc';
    case TRX = 'trx';
    case USDT = 'usdt';
    case XLM = 'xlm';
    case XRP = 'xrp';
    case XMR = 'xmr';
    case BNB = 'bnb';

    public function type(): CurrencyType
    {
        return match ($this) {
            self::AFN, self::EUR, self::ALL, self::DZD, self::USD, self::AOA, self::XCD, self::ARS, self::AMD,
            self::AWG, self::AUD, self::AZN, self::BSD, self::BHD, self::BDT, self::BBD, self::BYN, self::BZD,
            self::XOF, self::BMD, self::INR, self::BTN, self::BOB, self::BOV, self::BAM, self::BWP, self::NOK,
            self::BRL, self::BND, self::BGN, self::BIF, self::CVE, self::KHR, self::XAF, self::CAD, self::KYD,
            self::CLP, self::CLF, self::CNY, self::COP, self::COU, self::KMF, self::CDF, self::NZD, self::CRC,
            self::CUP, self::CUC, self::ANG, self::CZK, self::DKK, self::DJF, self::DOP, self::EGP, self::SVC,
            self::ERN, self::SZL, self::ETB, self::FKP, self::FJD, self::XPF, self::GMD, self::GEL, self::GHS,
            self::GIP, self::GTQ, self::GBP, self::GNF, self::GYD, self::HTG, self::HNL, self::HKD, self::HUF,
            self::ISK, self::IDR, self::XDR, self::IRR, self::IQD, self::ILS, self::JMD, self::JPY, self::JOD,
            self::KZT, self::KES, self::KPW, self::KRW, self::KWD, self::KGS, self::LAK, self::LBP, self::LSL,
            self::ZAR, self::LRD, self::LYD, self::CHF, self::MOP, self::MKD, self::MGA, self::MWK, self::MYR,
            self::MVR, self::MRU, self::MUR, self::XUA, self::MXN, self::MXV, self::MDL, self::MNT, self::MAD,
            self::MZN, self::MMK, self::NAD, self::NPR, self::NIO, self::NGN, self::OMR, self::PKR, self::PAB,
            self::PGK, self::PYG, self::PEN, self::PHP, self::PLN, self::QAR, self::RON, self::RUB, self::RWF,
            self::SHP, self::WST, self::STN, self::SAR, self::RSD, self::SCR, self::SLL, self::SLE, self::SGD,
            self::XSU, self::SBD, self::SOS, self::SSP, self::LKR, self::SDG, self::SRD, self::SEK, self::CHE,
            self::CHW, self::SYP, self::TWD, self::TJS, self::TZS, self::THB, self::TOP, self::TTD, self::TND,
            self::TRY, self::TMT, self::UGX, self::UAH, self::AED, self::USN, self::UYU, self::UYI, self::UYW,
            self::UZS, self::VUV, self::VES, self::VED, self::VND, self::YER, self::ZMW, self::ZWL => CurrencyType::Fiat,

            self::BCH, self::BTC, self::ETH, self::LTC, self::TRX, self::USDT, self::XLM, self::XRP,
            self::XMR, self::BNB => CurrencyType::Crypto,

            default => throw new \InvalidArgumentException(), // for psalm
        };
    }

    /**
     * @return string[]
     */
    public static function getCodes(): array
    {
        return array_map(
            static fn (Currency $currency) => $currency->getCode(),
            self::cases()
        );
    }

    public function isCrypto(): bool
    {
        return $this->type() === CurrencyType::Crypto;
    }

    public function isFiat(): bool
    {
        return $this->type() === CurrencyType::Fiat;
    }

    public function getPrecision(): int
    {
        return match ($this) {
            self::XOF, self::BIF, self::XAF, self::CLP, self::KMF, self::DJF, self::XPF, self::GNF, self::ISK,
            self::JPY, self::KRW, self::PYG, self::RWF, self::UGX, self::UYI, self::VUV, self::VND => 0,

            self::AFN, self::EUR, self::ALL, self::DZD, self::USD, self::AOA, self::XCD, self::ARS, self::AMD,
            self::AWG, self::AUD, self::AZN, self::BSD, self::BDT, self::BBD, self::BYN, self::BZD, self::BMD,
            self::INR, self::BTN, self::BOB, self::BOV, self::BAM, self::BWP, self::NOK, self::BRL, self::BND,
            self::BGN, self::CVE, self::KHR, self::CAD, self::KYD, self::CNY, self::COP, self::COU, self::CDF,
            self::NZD, self::CRC, self::CUP, self::CUC, self::ANG, self::CZK, self::DKK, self::DOP, self::EGP,
            self::SVC, self::ERN, self::SZL, self::ETB, self::FKP, self::FJD, self::GMD, self::GEL, self::GHS,
            self::GIP, self::GTQ, self::GBP, self::GYD, self::HTG, self::HNL, self::HKD, self::HUF, self::IDR,
            self::IRR, self::ILS, self::JMD, self::KZT, self::KES, self::KPW, self::KGS, self::LAK, self::LBP,
            self::LSL, self::ZAR, self::LRD, self::CHF, self::MOP, self::MKD, self::MGA, self::MWK, self::MYR,
            self::MVR, self::MRU, self::MUR, self::MXN, self::MXV, self::MDL, self::MNT, self::MAD, self::MZN,
            self::MMK, self::NAD, self::NPR, self::NIO, self::NGN, self::PKR, self::PAB, self::PGK, self::PEN,
            self::PHP, self::PLN, self::QAR, self::RON, self::RUB, self::SHP, self::WST, self::STN, self::SAR,
            self::RSD, self::SCR, self::SLL, self::SLE, self::SGD, self::SBD, self::SOS, self::SSP, self::LKR,
            self::SDG, self::SRD, self::SEK, self::CHE, self::CHW, self::SYP, self::TWD, self::TJS, self::TZS,
            self::THB, self::TOP, self::TTD, self::TRY, self::TMT, self::UAH, self::AED, self::USN, self::UYU,
            self::UZS, self::VES, self::VED, self::YER, self::ZMW, self::ZWL => 2,

            self::BHD, self::IQD, self::JOD, self::KWD, self::LYD, self::OMR, self::TND => 3,

            self::CLF, self::UYW => 4,

            // on iso 4217 precision is 'N.A.' set default COMPANY_SCALE.
            self::XDR, self::XUA, self::XSU => 17,

            self::BCH, self::BTC, self::LTC, self::USDT => 8,

            self::ETH, self::TRX, self::BNB => 17,

            self::XLM => 7,
            self::XRP => 15,
            self::XMR => 12,

            default => throw new \InvalidArgumentException(), // for psalm
        };
    }

    public function getIso4217Value(): ?int
    {
        return match ($this) {
            self::AFN => 971,
            self::EUR => 978,
            self::ALL => 8,
            self::DZD => 12,
            self::USD => 840,
            self::AOA => 973,
            self::XCD => 951,
            self::ARS => 32,
            self::AMD => 51,
            self::AWG => 533,
            self::AUD => 36,
            self::AZN => 944,
            self::BSD => 44,
            self::BHD => 48,
            self::BDT => 50,
            self::BBD => 52,
            self::BYN => 933,
            self::BZD => 84,
            self::XOF => 952,
            self::BMD => 60,
            self::INR => 356,
            self::BTN => 64,
            self::BOB => 68,
            self::BOV => 984,
            self::BAM => 977,
            self::BWP => 72,
            self::NOK => 578,
            self::BRL => 986,
            self::BND => 96,
            self::BGN => 975,
            self::BIF => 108,
            self::CVE => 132,
            self::KHR => 116,
            self::XAF => 950,
            self::CAD => 124,
            self::KYD => 136,
            self::CLP => 152,
            self::CLF => 990,
            self::CNY => 156,
            self::COP => 170,
            self::COU => 970,
            self::KMF => 174,
            self::CDF => 976,
            self::NZD => 554,
            self::CRC => 188,
            self::CUP => 192,
            self::CUC => 931,
            self::ANG => 532,
            self::CZK => 203,
            self::DKK => 208,
            self::DJF => 262,
            self::DOP => 214,
            self::EGP => 818,
            self::SVC => 222,
            self::ERN => 232,
            self::SZL => 748,
            self::ETB => 230,
            self::FKP => 238,
            self::FJD => 242,
            self::XPF => 953,
            self::GMD => 270,
            self::GEL => 981,
            self::GHS => 936,
            self::GIP => 292,
            self::GTQ => 320,
            self::GBP => 826,
            self::GNF => 324,
            self::GYD => 328,
            self::HTG => 332,
            self::HNL => 340,
            self::HKD => 344,
            self::HUF => 348,
            self::ISK => 352,
            self::IDR => 360,
            self::XDR => 960,
            self::IRR => 364,
            self::IQD => 368,
            self::ILS => 376,
            self::JMD => 388,
            self::JPY => 392,
            self::JOD => 400,
            self::KZT => 398,
            self::KES => 404,
            self::KPW => 408,
            self::KRW => 410,
            self::KWD => 414,
            self::KGS => 417,
            self::LAK => 418,
            self::LBP => 422,
            self::LSL => 426,
            self::ZAR => 710,
            self::LRD => 430,
            self::LYD => 434,
            self::CHF => 756,
            self::MOP => 446,
            self::MKD => 807,
            self::MGA => 969,
            self::MWK => 454,
            self::MYR => 458,
            self::MVR => 462,
            self::MRU => 929,
            self::MUR => 480,
            self::XUA => 965,
            self::MXN => 484,
            self::MXV => 979,
            self::MDL => 498,
            self::MNT => 496,
            self::MAD => 504,
            self::MZN => 943,
            self::MMK => 104,
            self::NAD => 516,
            self::NPR => 524,
            self::NIO => 558,
            self::NGN => 566,
            self::OMR => 512,
            self::PKR => 586,
            self::PAB => 590,
            self::PGK => 598,
            self::PYG => 600,
            self::PEN => 604,
            self::PHP => 608,
            self::PLN => 985,
            self::QAR => 634,
            self::RON => 946,
            self::RUB => 643,
            self::RWF => 646,
            self::SHP => 654,
            self::WST => 882,
            self::STN => 930,
            self::SAR => 682,
            self::RSD => 941,
            self::SCR => 690,
            self::SLL => 694,
            self::SLE => 925,
            self::SGD => 702,
            self::XSU => 994,
            self::SBD => 90,
            self::SOS => 706,
            self::SSP => 728,
            self::LKR => 144,
            self::SDG => 938,
            self::SRD => 968,
            self::SEK => 752,
            self::CHE => 947,
            self::CHW => 948,
            self::SYP => 760,
            self::TWD => 901,
            self::TJS => 972,
            self::TZS => 834,
            self::THB => 764,
            self::TOP => 776,
            self::TTD => 780,
            self::TND => 788,
            self::TRY => 949,
            self::TMT => 934,
            self::UGX => 800,
            self::UAH => 980,
            self::AED => 784,
            self::USN => 997,
            self::UYU => 858,
            self::UYI => 940,
            self::UYW => 927,
            self::UZS => 860,
            self::VUV => 548,
            self::VES => 928,
            self::VED => 926,
            self::VND => 704,
            self::YER => 886,
            self::ZMW => 967,
            self::ZWL => 932,
            default => null
        };
    }

    public function getIso4217AheadZeroValue(): ?string
    {
        $intCode = $this->getIso4217Value();
        if ($intCode === null) {
            return $intCode;
        }

        return sprintf("%'.03d", $intCode);
    }

    public static function tryFromIso4217(int $value): ?self
    {
        foreach (self::getFiatCurrencies() as $currency) {
            if ($currency->getIso4217Value() === $value) {
                return $currency;
            }
        }

        return null;
    }

    public function getCode(): string
    {
        return $this->value;
    }

    public function getUpperCaseCode(): string
    {
        return strtoupper($this->value);
    }

    /**
     * @return self[]
     */
    public static function getCryptoCurrencies(): array
    {
        $result = [];
        foreach (self::cases() as $currency) {
            if ($currency->isCrypto()) {
                $result[] = $currency;
            }
        }

        return $result;
    }

    /**
     * @return string[]
     */
    public static function getCryptoCurrencyCodes(): array
    {
        $result = [];
        foreach (self::cases() as $currency) {
            if ($currency->isCrypto()) {
                $result[] = $currency->getCode();
            }
        }

        return $result;
    }

    /**
     * @return self[]
     */
    public static function getFiatCurrencies(): array
    {
        $result = [];
        foreach (self::cases() as $currency) {
            if ($currency->isFiat()) {
                $result[] = $currency;
            }
        }

        return $result;
    }

    /**
     * @return string[]
     */
    public static function getFiatCurrencyCodes(): array
    {
        $result = [];
        foreach (self::getFiatCurrencies() as $currency) {
            $result[] = $currency->getCode();
        }

        return $result;
    }

    /**
     * @return array<string, int>
     */
    public static function getCurrenciesPrecisions(): array
    {
        $precisions = [];
        foreach (self::cases() as $currencyEnum) {
            $precisions[$currencyEnum->value] = $currencyEnum->getPrecision();
        }

        return $precisions;
    }

    /**
     * @return array<string,string>
     */
    public static function getNameValueCollection(): array
    {
        $collection = [];
        foreach (self::cases() as $currencyEnum) {
            $collection[$currencyEnum->name] = $currencyEnum->value;
        }

        return $collection;
    }

    public function getCurrencyName(): string
    {
        return match ($this) {
            self::AFN => 'Afghani',
            self::EUR => 'Euro',
            self::ALL => 'Lek',
            self::DZD => 'Algerian Dinar',
            self::USD => 'US Dollar',
            self::AOA => 'Kwanza',
            self::XCD => 'East Caribbean Dollar',
            self::ARS => 'Argentine Peso',
            self::AMD => 'Armenian Dram',
            self::AWG => 'Aruban Florin',
            self::AUD => 'Australian Dollar',
            self::AZN => 'Azerbaijan Manat',
            self::BSD => 'Bahamian Dollar',
            self::BHD => 'Bahraini Dinar',
            self::BDT => 'Taka',
            self::BBD => 'Barbados Dollar',
            self::BYN => 'Belarusian Ruble',
            self::BZD => 'Belize Dollar',
            self::XOF => 'CFA Franc BCEAO',
            self::BMD => 'Bermudian Dollar',
            self::INR => 'Indian Rupee',
            self::BTN => 'Ngultrum',
            self::BOB => 'Boliviano',
            self::BOV => 'Mvdol',
            self::BAM => 'Convertible Mark',
            self::BWP => 'Pula',
            self::NOK => 'Norwegian Krone',
            self::BRL => 'Brazilian Real',
            self::BND => 'Brunei Dollar',
            self::BGN => 'Bulgarian Lev',
            self::BIF => 'Burundi Franc',
            self::CVE => 'Cabo Verde Escudo',
            self::KHR => 'Riel',
            self::XAF => 'CFA Franc BEAC',
            self::CAD => 'Canadian Dollar',
            self::KYD => 'Cayman Islands Dollar',
            self::CLP => 'Chilean Peso',
            self::CLF => 'Unidad de Fomento',
            self::CNY => 'Yuan Renminbi',
            self::COP => 'Colombian Peso',
            self::COU => 'Unidad de Valor Real',
            self::KMF => 'Comorian Franc ',
            self::CDF => 'Congolese Franc',
            self::NZD => 'New Zealand Dollar',
            self::CRC => 'Costa Rican Colon',
            self::CUP => 'Cuban Peso',
            self::CUC => 'Peso Convertible',
            self::ANG => 'Netherlands Antillean Guilder',
            self::CZK => 'Czech Koruna',
            self::DKK => 'Danish Krone',
            self::DJF => 'Djibouti Franc',
            self::DOP => 'Dominican Peso',
            self::EGP => 'Egyptian Pound',
            self::SVC => 'El Salvador Colon',
            self::ERN => 'Nakfa',
            self::SZL => 'Lilangeni',
            self::ETB => 'Ethiopian Birr',
            self::FKP => 'Falkland Islands Pound',
            self::FJD => 'Fiji Dollar',
            self::XPF => 'CFP Franc',
            self::GMD => 'Dalasi',
            self::GEL => 'Lari',
            self::GHS => 'Ghana Cedi',
            self::GIP => 'Gibraltar Pound',
            self::GTQ => 'Quetzal',
            self::GBP => 'Pound Sterling',
            self::GNF => 'Guinean Franc',
            self::GYD => 'Guyana Dollar',
            self::HTG => 'Gourde',
            self::HNL => 'Lempira',
            self::HKD => 'Hong Kong Dollar',
            self::HUF => 'Forint',
            self::ISK => 'Iceland Krona',
            self::IDR => 'Rupiah',
            self::XDR => 'SDR (Special Drawing Right)',
            self::IRR => 'Iranian Rial',
            self::IQD => 'Iraqi Dinar',
            self::ILS => 'New Israeli Sheqel',
            self::JMD => 'Jamaican Dollar',
            self::JPY => 'Yen',
            self::JOD => 'Jordanian Dinar',
            self::KZT => 'Tenge',
            self::KES => 'Kenyan Shilling',
            self::KPW => 'North Korean Won',
            self::KRW => 'Won',
            self::KWD => 'Kuwaiti Dinar',
            self::KGS => 'Som',
            self::LAK => 'Lao Kip',
            self::LBP => 'Lebanese Pound',
            self::LSL => 'Loti',
            self::ZAR => 'Rand',
            self::LRD => 'Liberian Dollar',
            self::LYD => 'Libyan Dinar',
            self::CHF => 'Swiss Franc',
            self::MOP => 'Pataca',
            self::MKD => 'Denar',
            self::MGA => 'Malagasy Ariary',
            self::MWK => 'Malawi Kwacha',
            self::MYR => 'Malaysian Ringgit',
            self::MVR => 'Rufiyaa',
            self::MRU => 'Ouguiya',
            self::MUR => 'Mauritius Rupee',
            self::XUA => 'ADB Unit of Account',
            self::MXN => 'Mexican Peso',
            self::MXV => 'Mexican Unidad de Inversion (UDI)',
            self::MDL => 'Moldovan Leu',
            self::MNT => 'Tugrik',
            self::MAD => 'Moroccan Dirham',
            self::MZN => 'Mozambique Metical',
            self::MMK => 'Kyat',
            self::NAD => 'Namibia Dollar',
            self::NPR => 'Nepalese Rupee',
            self::NIO => 'Cordoba Oro',
            self::NGN => 'Naira',
            self::OMR => 'Rial Omani',
            self::PKR => 'Pakistan Rupee',
            self::PAB => 'Balboa',
            self::PGK => 'Kina',
            self::PYG => 'Guarani',
            self::PEN => 'Sol',
            self::PHP => 'Philippine Peso',
            self::PLN => 'Zloty',
            self::QAR => 'Qatari Rial',
            self::RON => 'Romanian Leu',
            self::RUB => 'Russian Ruble',
            self::RWF => 'Rwanda Franc',
            self::SHP => 'Saint Helena Pound',
            self::WST => 'Tala',
            self::STN => 'Dobra',
            self::SAR => 'Saudi Riyal',
            self::RSD => 'Serbian Dinar',
            self::SCR => 'Seychelles Rupee',
            self::SLL => 'Leone',
            self::SLE => 'Leone',
            self::SGD => 'Singapore Dollar',
            self::XSU => 'Sucre',
            self::SBD => 'Solomon Islands Dollar',
            self::SOS => 'Somali Shilling',
            self::SSP => 'South Sudanese Pound',
            self::LKR => 'Sri Lanka Rupee',
            self::SDG => 'Sudanese Pound',
            self::SRD => 'Surinam Dollar',
            self::SEK => 'Swedish Krona',
            self::CHE => 'WIR Euro',
            self::CHW => 'WIR Franc',
            self::SYP => 'Syrian Pound',
            self::TWD => 'New Taiwan Dollar',
            self::TJS => 'Somoni',
            self::TZS => 'Tanzanian Shilling',
            self::THB => 'Baht',
            self::TOP => 'Pa’anga',
            self::TTD => 'Trinidad and Tobago Dollar',
            self::TND => 'Tunisian Dinar',
            self::TRY => 'Turkish Lira',
            self::TMT => 'Turkmenistan New Manat',
            self::UGX => 'Uganda Shilling',
            self::UAH => 'Hryvnia',
            self::AED => 'UAE Dirham',
            self::USN => 'US Dollar (Next day)',
            self::UYU => 'Peso Uruguayo',
            self::UYI => 'Uruguay Peso en Unidades Indexadas (UI)',
            self::UYW => 'Unidad Previsional',
            self::UZS => 'Uzbekistan Sum',
            self::VUV => 'Vatu',
            self::VES => 'Bolívar Soberano',
            self::VED => 'Bolívar Soberano',
            self::VND => 'Dong',
            self::YER => 'Yemeni Rial',
            self::ZMW => 'Zambian Kwacha',
            self::ZWL => 'Zimbabwe Dollar',
            default => '',
        };
    }
}
