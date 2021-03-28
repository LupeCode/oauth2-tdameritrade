<?php

namespace LupeCode\OAuth2\Client\Test\src\Provider;

use LupeCode\OAuth2\Client\Provider\ResourceOwner\Account;
use LupeCode\OAuth2\Client\Provider\ResourceOwner\ExchangeAgreementsAccepted;
use LupeCode\OAuth2\Client\Provider\ResourceOwner\QuotesDelayed;
use LupeCode\OAuth2\Client\Provider\ResourceOwner\StreamerInformation;
use LupeCode\OAuth2\Client\Provider\TDAmeritradeResourceOwner;
use PHPUnit\Framework\TestCase;

class TDAmeritradeResourceOwnerTest extends TestCase
{
    protected $owner;
    protected const SAMPLE_DATA = [
        'userId'              => 'usermcuserface',
        'userCdDomainId'      => 'A000123456',
        'primaryAccountId'    => '1234567',
        'lastLoginTime'       => '2021-03-26T00:00:00+0000',
        'tokenExpirationTime' => '2021-03-28T00:00:00+0000',
        'loginTime'           => '2021-03-27T00:00:00+0000',
        'accessLevel'         => 'ACCESS',
        'stalePassword'       => false,
        'streamerInfo'        => [
            'streamerBinaryUrl' => 'streamer.binary.url',
            'streamerSocketUrl' => 'streamer.socket.url',
            'token'             => 'MEGATOKEN',
            'tokenTimestamp'    => '2021-03-25T00:00:00+0000',
            'userGroup'         => 'GROUP',
            'accessLevel'       => 'EVERYTHING',
            'acl'               => 'LOOKATHISACL',
            'appId'             => 'MYAPP',
            'keys'              => [
                'key' => 'abc123def456',
            ],
        ],
        'professionalStatus'  => 'TOTAL_PRO',
        'quotes'              => [
            'isNyseDelayed'   => false,
            'isNasdaqDelayed' => false,
            'isOpraDelayed'   => false,
            'isAmexDelayed'   => false,
            'isCmeDelayed'    => false,
            'isIceDelayed'    => false,
            'isForexDelayed'  => false,
        ],
        'exchangeAgreements'  => [
            'NYSE_EXCHANGE_AGREEMENT'   => 'NYSE',
            'OPRA_EXCHANGE_AGREEMENT'   => 'OPRA',
            'NASDAQ_EXCHANGE_AGREEMENT' => 'NASDAQ',
        ],
        'accounts'            => [
            [
                'accountId'         => '654987321',
                'displayName'       => 'User McUserface',
                'accountCdDomainId' => 'A000123456',
                'company'           => 'TDA',
                'segment'           => 'ADVNCED',
                'surrogateIds'      => [
                    'ABC' => '123',
                    'DEF' => '456',
                ],
                'preferences'       => [
                    'expressTrading'                   => true,
                    'directOptionsRouting'             => true,
                    'directEquityRouting'              => true,
                    'defaultEquityOrderLegInstruction' => 'SENDIT',
                    'defaultEquityOrderType'           => 'LIMIT',
                    'defaultEquityOrderPriceLinkType'  => 'TRIGGER',
                    'defaultEquityOrderDuration'       => 'DAY',
                    'defaultEquityOrderMarketSession'  => 'EXT',
                    'defaultEquityQuantity'            => 100,
                    'mutualFundTaxLotMethod'           => 'FIFO',
                    'optionTaxLotMethod'               => 'FILO',
                    'equityTaxLotMethod'               => 'LIFO',
                    'defaultAdvancedToolLaunch'        => 'MONEYMAKER',
                    'authTokenTimeout'                 => 'FIFTY_FIVE_MINUTES',
                ],
                'acl'               => 'ANOTHERCOOLACL',
                'authorizations'    => [
                    'apex'               => true,
                    'levelTwoQuotes'     => true,
                    'stockTrading'       => true,
                    'marginTrading'      => true,
                    'streamingNews'      => true,
                    'optionTradingLevel' => 'FULL',
                    'streamerAccess'     => true,
                    'advancedMargin'     => true,
                    'scottradeAccount'   => true,
                ],
            ],
        ],
    ];

    protected function setUp(): void
    {
        $this->owner = new TDAmeritradeResourceOwner(static::SAMPLE_DATA);
    }

    public function testScalarValues(): void
    {
        self::assertEquals(static::SAMPLE_DATA['userId'], $this->owner->getUserId());
        self::assertEquals(static::SAMPLE_DATA['userCdDomainId'], $this->owner->getUserCdDomainId());
        self::assertEquals(static::SAMPLE_DATA['primaryAccountId'], $this->owner->getPrimaryAccountId());
        self::assertEquals(static::SAMPLE_DATA['lastLoginTime'], $this->owner->getLastLoginTime());
        self::assertEquals(static::SAMPLE_DATA['tokenExpirationTime'], $this->owner->getTokenExpirationTime());
        self::assertEquals(static::SAMPLE_DATA['loginTime'], $this->owner->getLoginTime());
        self::assertEquals(static::SAMPLE_DATA['accessLevel'], $this->owner->getAccessLevel());
        self::assertEquals(static::SAMPLE_DATA['stalePassword'], $this->owner->isStalePassword());
        self::assertEquals(static::SAMPLE_DATA['professionalStatus'], $this->owner->getProfessionalStatus());
    }

    public function testStreamerInfoValues(): void
    {
        $streamerInfo = $this->owner->getStreamerInfo();
        self::assertInstanceOf(StreamerInformation::class, $streamerInfo);
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['streamerBinaryUrl'], $streamerInfo->getStreamerBinaryUrl());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['streamerSocketUrl'], $streamerInfo->getStreamerSocketUrl());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['token'], $streamerInfo->getToken());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['tokenTimestamp'], $streamerInfo->getTokenTimestamp());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['userGroup'], $streamerInfo->getUserGroup());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['accessLevel'], $streamerInfo->getAccessLevel());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['acl'], $streamerInfo->getAcl());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['appId'], $streamerInfo->getAppId());
        self::assertEquals(static::SAMPLE_DATA['streamerInfo']['keys'], $streamerInfo->getKeys());
    }

    public function testQuotesDelayedValues(): void
    {
        $quotes = $this->owner->getQuotesDelayed();
        self::assertInstanceOf(QuotesDelayed::class, $quotes);
        self::assertEquals(static::SAMPLE_DATA['quotes']['isNyseDelayed'], $quotes->isNyseDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isNasdaqDelayed'], $quotes->isNasdaqDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isOpraDelayed'], $quotes->isOpraDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isAmexDelayed'], $quotes->isAmexDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isCmeDelayed'], $quotes->isCmeDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isIceDelayed'], $quotes->isIceDelayed());
        self::assertEquals(static::SAMPLE_DATA['quotes']['isForexDelayed'], $quotes->isForexDelayed());
    }

    public function testExchangeAgreementsAcceptedValues(): void
    {
        $eaa = $this->owner->getExchangeAgreements();
        self::assertInstanceOf(ExchangeAgreementsAccepted::class, $eaa);
        self::assertEquals(static::SAMPLE_DATA['exchangeAgreements']['NYSE_EXCHANGE_AGREEMENT'], $eaa->getNyseExchangeAgreement());
        self::assertEquals(static::SAMPLE_DATA['exchangeAgreements']['OPRA_EXCHANGE_AGREEMENT'], $eaa->getOpraExchangeAgreement());
        self::assertEquals(static::SAMPLE_DATA['exchangeAgreements']['NASDAQ_EXCHANGE_AGREEMENT'], $eaa->getNasdaqExchangeAgreement());
    }

    public function testAccountValues(): void
    {
        $account = $this->owner->getAccounts()[0];
        self::assertInstanceOf(Account::class, $account);
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['accountId'], $account->getAccountId());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['displayName'], $account->getDisplayName());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['accountCdDomainId'], $account->getAccountCdDomainId());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['company'], $account->getCompany());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['segment'], $account->getSegment());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['surrogateIds'], $account->getSurrogateIds());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['acl'], $account->getAcl());
    }

    public function testAccountPreferencesValues(): void
    {
        $preferences = $this->owner->getAccounts()[0]->getPreferences();
        self::assertInstanceOf(Account\Preferences::class, $preferences);
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['expressTrading'], $preferences->isExpressTrading());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['directOptionsRouting'], $preferences->isDirectOptionsRouting());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['directEquityRouting'], $preferences->isDirectEquityRouting());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityOrderLegInstruction'], $preferences->getDefaultEquityOrderLegInstruction());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityOrderType'], $preferences->getDefaultEquityOrderType());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityOrderPriceLinkType'], $preferences->getDefaultEquityOrderPriceLinkType());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityOrderDuration'], $preferences->getDefaultEquityOrderDuration());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityOrderMarketSession'], $preferences->getDefaultEquityOrderMarketSession());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultEquityQuantity'], $preferences->getDefaultEquityQuantity());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['mutualFundTaxLotMethod'], $preferences->getMutualFundTaxLotMethod());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['optionTaxLotMethod'], $preferences->getOptionTaxLotMethod());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['equityTaxLotMethod'], $preferences->getEquityTaxLotMethod());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['defaultAdvancedToolLaunch'], $preferences->getDefaultAdvancedToolLaunch());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['preferences']['authTokenTimeout'], $preferences->getAuthTokenTimeout());
    }

    public function testAccountAuthorizationsValues(): void
    {
        $authorizations = $this->owner->getAccounts()[0]->getAuthorizations();
        self::assertInstanceOf(Account\Authorizations::class, $authorizations);
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['apex'], $authorizations->isApex());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['levelTwoQuotes'], $authorizations->isLevelTwoQuotes());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['stockTrading'], $authorizations->isStockTrading());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['marginTrading'], $authorizations->isMarginTrading());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['streamingNews'], $authorizations->isStreamingNews());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['optionTradingLevel'], $authorizations->getOptionTradingLevel());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['streamerAccess'], $authorizations->isStreamerAccess());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['advancedMargin'], $authorizations->isAdvancedMargin());
        self::assertEquals(static::SAMPLE_DATA['accounts'][0]['authorizations']['scottradeAccount'], $authorizations->isScottradeAccount());
    }

}
