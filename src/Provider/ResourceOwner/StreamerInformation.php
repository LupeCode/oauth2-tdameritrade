<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner;

class StreamerInformation
{
    /** @var string */
    protected $streamerBinaryUrl;
    /** @var string */
    protected $streamerSocketUrl;
    /** @var string */
    protected $token;
    /** @var string */
    protected $tokenTimestamp;
    /** @var string */
    protected $userGroup;
    /** @var string */
    protected $accessLevel;
    /** @var string */
    protected $acl;
    /** @var string */
    protected $appId;
    /** @var string[] */
    protected $keys;

    /**
     * @param string $streamerBinaryUrl
     *
     * @return $this
     */
    protected function setStreamerBinaryUrl(string $streamerBinaryUrl)
    {
        $this->streamerBinaryUrl = $streamerBinaryUrl;

        return $this;
    }

    /**
     * @param string $streamerSocketUrl
     *
     * @return $this
     */
    protected function setStreamerSocketUrl(string $streamerSocketUrl)
    {
        $this->streamerSocketUrl = $streamerSocketUrl;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    protected function setToken(string $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param string $tokenTimestamp
     *
     * @return $this
     */
    protected function setTokenTimestamp(string $tokenTimestamp)
    {
        $this->tokenTimestamp = $tokenTimestamp;

        return $this;
    }

    /**
     * @param string $userGroup
     *
     * @return $this
     */
    protected function setUserGroup(string $userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * @param string $accessLevel
     *
     * @return $this
     */
    protected function setAccessLevel(string $accessLevel)
    {
        $this->accessLevel = $accessLevel;

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
     * @param string $appId
     *
     * @return $this
     */
    protected function setAppId(string $appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * @param string[] $keys
     *
     * @return $this
     */
    protected function setKeys(array $keys)
    {
        $this->keys = $keys;

        return $this;
    }

    public function __construct(array $info = [])
    {
        $this
            ->setStreamerBinaryUrl($info['streamerBinaryUrl'] ?? '')
            ->setStreamerSocketUrl($info['streamerSocketUrl'] ?? '')
            ->setToken($info['token'] ?? '')
            ->setTokenTimestamp($info['tokenTimestamp'] ?? '')
            ->setUserGroup($info['userGroup'] ?? '')
            ->setAccessLevel($info['accessLevel'] ?? '')
            ->setAcl($info['acl'] ?? '')
            ->setAppId($info['appId'] ?? '')
            ->setKeys($info['keys'] ?? [])
        ;
    }

    /**
     * @return string
     */
    public function getStreamerBinaryUrl(): string
    {
        return $this->streamerBinaryUrl;
    }

    /**
     * @return string
     */
    public function getStreamerSocketUrl(): string
    {
        return $this->streamerSocketUrl;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getTokenTimestamp(): string
    {
        return $this->tokenTimestamp;
    }

    /**
     * @return string
     */
    public function getUserGroup(): string
    {
        return $this->userGroup;
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
    public function getAcl(): string
    {
        return $this->acl;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @return string[]
     */
    public function getKeys(): array
    {
        return $this->keys;
    }
}
