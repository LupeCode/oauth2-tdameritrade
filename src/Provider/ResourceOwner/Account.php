<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner;

use LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Authorizations;
use LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Preferences;

class Account
{
    /** @var string */
    protected $accountId;
    /** @var string */
    protected $displayName;
    /** @var string */
    protected $accountCdDomainId;
    /** @var string */
    protected $company;
    /** @var string */
    protected $segment;
    /** @var string[] */
    protected $surrogateIds;
    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Preferences */
    protected $preferences;
    /** @var string */
    protected $acl;
    /** @var \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Authorizations */
    protected $authorizations;

    /**
     * @param string $accountId
     *
     * @return $this
     */
    protected function setAccountId(string $accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    protected function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @param string $accountCdDomainId
     *
     * @return $this
     */
    protected function setAccountCdDomainId(string $accountCdDomainId)
    {
        $this->accountCdDomainId = $accountCdDomainId;

        return $this;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    protected function setCompany(string $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @param string $segment
     *
     * @return $this
     */
    protected function setSegment(string $segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * @param string[] $surrogateIds
     *
     * @return $this
     */
    protected function setSurrogateIds(array $surrogateIds)
    {
        $this->surrogateIds = $surrogateIds;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Preferences $preferences
     *
     * @return $this
     */
    protected function setPreferences(Preferences $preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * @param string $acl
     *
     * @return $this
     */
    protected function setAcl(string $acl)
    {
        $this->acl = $acl;

        return $this;
    }

    /**
     * @param \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Authorizations $authorizations
     *
     * @return $this
     */
    protected function setAuthorizations(Authorizations $authorizations)
    {
        $this->authorizations = $authorizations;

        return $this;
    }

    public function __construct(array $account = [])
    {
        $this
            ->setAccountId($account['accountId'] ?? '')
            ->setDisplayName($account['displayName'] ?? '')
            ->setAccountCdDomainId($account['accountCdDomainId'] ?? '')
            ->setCompany($account['company'] ?? '')
            ->setSegment($account['segment'] ?? '')
            ->setSurrogateIds($account['surrogateIds'] ?? '')
            ->setPreferences(new Preferences($account['preferences'] ?? ''))
            ->setAcl($account['acl'] ?? '')
            ->setAuthorizations(new Authorizations($account['authorizations'] ?? ''))
        ;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getAccountCdDomainId(): string
    {
        return $this->accountCdDomainId;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getSegment(): string
    {
        return $this->segment;
    }

    /**
     * @return string[]
     */
    public function getSurrogateIds(): array
    {
        return $this->surrogateIds;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Preferences
     */
    public function getPreferences(): Preferences
    {
        return $this->preferences;
    }

    /**
     * @return string
     */
    public function getAcl(): string
    {
        return $this->acl;
    }

    /**
     * @return \LupeCode\OAuth2\Client\Provider\ResourceOwner\Account\Authorizations
     */
    public function getAuthorizations(): Authorizations
    {
        return $this->authorizations;
    }
}
