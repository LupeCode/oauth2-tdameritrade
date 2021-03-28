<?php

namespace LupeCode\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class TDAmeritradeResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;

    /** @var array */
    protected $response;

    /** @var string */
    protected $userId;
    /** @var string */
    protected $userCdDomainId;
    /** @var string */
    protected $primaryAccountId;
    /** @var string */
    protected $lastLoginTime;
    /** @var string */
    protected $tokenExpirationTime;
    /** @var string */
    protected $loginTime;
    /** @var string */
    protected $accessLevel;
    /** @var string */
    protected $professionalStatus;

    /** @var bool */
    protected $stalePassword;

    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\QuotesDelayed */
    protected $quotesDelayed;
    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\StreamerInformation */
    protected $streamerInfo;
    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\ExchangeAgreementsAccepted */
    protected $exchangeAgreements;
    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account[] */
    protected $accounts;

    protected function setResponse(array $response = []): self
    {
        $this->response = $response;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    protected function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @param string $userCdDomainId
     *
     * @return $this
     */
    protected function setUserCdDomainId(string $userCdDomainId): self
    {
        $this->userCdDomainId = $userCdDomainId;

        return $this;
    }

    /**
     * @param string $primaryAccountId
     *
     * @return $this
     */
    protected function setPrimaryAccountId(string $primaryAccountId): self
    {
        $this->primaryAccountId = $primaryAccountId;

        return $this;
    }

    /**
     * @param string $lastLoginTime
     *
     * @return $this
     */
    protected function setLastLoginTime(string $lastLoginTime): self
    {
        $this->lastLoginTime = $lastLoginTime;

        return $this;
    }

    /**
     * @param string $tokenExpirationTime
     *
     * @return $this
     */
    protected function setTokenExpirationTime(string $tokenExpirationTime): self
    {
        $this->tokenExpirationTime = $tokenExpirationTime;

        return $this;
    }

    /**
     * @param string $loginTime
     *
     * @return $this
     */
    protected function setLoginTime(string $loginTime): self
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * @param string $accessLevel
     *
     * @return $this
     */
    protected function setAccessLevel(string $accessLevel): self
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * @param string $professionalStatus
     *
     * @return $this
     */
    protected function setProfessionalStatus(string $professionalStatus): self
    {
        $this->professionalStatus = $professionalStatus;

        return $this;
    }

    /**
     * @param bool $stalePassword
     *
     * @return $this
     */
    protected function setStalePassword(bool $stalePassword): self
    {
        $this->stalePassword = $stalePassword;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\QuotesDelayed $quotesDelayed
     *
     * @return $this
     */
    protected function setQuotesDelayed(ResourceOwner\QuotesDelayed $quotesDelayed): self
    {
        $this->quotesDelayed = $quotesDelayed;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\StreamerInformation $streamerSubscriptionKeys
     *
     * @return $this
     */
    protected function setStreamerInfo(ResourceOwner\StreamerInformation $streamerInfo): self
    {
        $this->streamerInfo = $streamerInfo;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\ExchangeAgreementsAccepted $exchangeAgreements
     *
     * @return $this
     */
    protected function setExchangeAgreements(ResourceOwner\ExchangeAgreementsAccepted $exchangeAgreements): self
    {
        $this->exchangeAgreements = $exchangeAgreements;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account[] $accounts
     *
     * @return $this
     */
    protected function setAccounts(array $accounts): self
    {
        $this->accounts = [];
        foreach ($accounts as $account) {
            $this->accounts[] = new ResourceOwner\Account($account ?? []);
        }

        return $this;
    }

    /**
     * @param array $response
     */
    public function __construct(array $response = [])
    {
        $this
            ->setResponse($response)
            ->setUserId($response['userId'] ?? '')
            ->setUserCdDomainId($response['userCdDomainId'] ?? '')
            ->setPrimaryAccountId($response['primaryAccountId'] ?? '')
            ->setLastLoginTime($response['lastLoginTime'] ?? '')
            ->setTokenExpirationTime($response['tokenExpirationTime'] ?? '')
            ->setLoginTime($response['loginTime'] ?? '')
            ->setAccessLevel($response['accessLevel'] ?? '')
            ->setProfessionalStatus($response['professionalStatus'] ?? '')
            ->setStalePassword($response['stalePassword'] ?? false)
            ->setQuotesDelayed(new ResourceOwner\QuotesDelayed($response['quotes'] ?? []))
            ->setStreamerInfo(new ResourceOwner\StreamerInformation(array_merge($response['streamerInfo'] ?? [], $response['streamerSubscriptionKeys'] ?? [])))
            ->setExchangeAgreements(new ResourceOwner\ExchangeAgreementsAccepted($response['exchangeAgreements'] ?? []))
            ->setAccounts($response['accounts'] ?? [])
        ;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->getValueByKey($this->response, 'userId');
    }

    /**
     * @return string|null
     */
    public function getUserId()
    {
        return $this->getId();
    }

    /**
     * @return string
     */
    public function getUserCdDomainId(): string
    {
        return $this->userCdDomainId;
    }

    /**
     * @return string
     */
    public function getPrimaryAccountId(): string
    {
        return $this->primaryAccountId;
    }

    /**
     * @return string
     */
    public function getLastLoginTime(): string
    {
        return $this->lastLoginTime;
    }

    /**
     * @return string
     */
    public function getTokenExpirationTime(): string
    {
        return $this->tokenExpirationTime;
    }

    /**
     * @return string
     */
    public function getLoginTime(): string
    {
        return $this->loginTime;
    }

    /**
     * @return string
     */
    public function getAccessLevel(): string
    {
        return $this->accessLevel;
    }

    /**
     * @return string
     */
    public function getProfessionalStatus(): string
    {
        return $this->professionalStatus;
    }

    /**
     * @return bool
     */
    public function isStalePassword(): bool
    {
        return $this->stalePassword;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\QuotesDelayed
     */
    public function getQuotesDelayed(): ResourceOwner\QuotesDelayed
    {
        return $this->quotesDelayed;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\StreamerInformation
     */
    public function getStreamerInfo(): ResourceOwner\StreamerInformation
    {
        return $this->streamerInfo;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\ExchangeAgreementsAccepted
     */
    public function getExchangeAgreements(): ResourceOwner\ExchangeAgreementsAccepted
    {
        return $this->exchangeAgreements;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account[]
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
