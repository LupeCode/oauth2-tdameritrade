<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner\Account;

class Authorizations
{
    /** @var bool */
    protected $apex;
    /** @var bool */
    protected $levelTwoQuotes;
    /** @var bool */
    protected $stockTrading;
    /** @var bool */
    protected $marginTrading;
    /** @var bool */
    protected $streamingNews;
    /** @var bool */
    protected $streamerAccess;
    /** @var bool */
    protected $advancedMargin;
    /** @var bool */
    protected $scottradeAccount;
    /** @var string */
    protected $optionTradingLevel;

    /**
     * @param bool $apex
     *
     * @return $this
     */
    protected function setApex(bool $apex): self
    {
        $this->apex = $apex;

        return $this;
    }

    /**
     * @param bool $levelTwoQuotes
     *
     * @return $this
     */
    protected function setLevelTwoQuotes(bool $levelTwoQuotes): self
    {
        $this->levelTwoQuotes = $levelTwoQuotes;

        return $this;
    }

    /**
     * @param bool $stockTrading
     *
     * @return $this
     */
    protected function setStockTrading(bool $stockTrading): self
    {
        $this->stockTrading = $stockTrading;

        return $this;
    }

    /**
     * @param bool $marginTrading
     *
     * @return $this
     */
    protected function setMarginTrading(bool $marginTrading): self
    {
        $this->marginTrading = $marginTrading;

        return $this;
    }

    /**
     * @param bool $streamingNews
     *
     * @return $this
     */
    protected function setStreamingNews(bool $streamingNews): self
    {
        $this->streamingNews = $streamingNews;

        return $this;
    }

    /**
     * @param bool $streamerAccess
     *
     * @return $this
     */
    protected function setStreamerAccess(bool $streamerAccess): self
    {
        $this->streamerAccess = $streamerAccess;

        return $this;
    }

    /**
     * @param bool $advancedMargin
     *
     * @return $this
     */
    protected function setAdvancedMargin(bool $advancedMargin): self
    {
        $this->advancedMargin = $advancedMargin;

        return $this;
    }

    /**
     * @param bool $scottradeAccount
     *
     * @return $this
     */
    protected function setScottradeAccount(bool $scottradeAccount): self
    {
        $this->scottradeAccount = $scottradeAccount;

        return $this;
    }

    /**
     * @param string $optionTradingLevel
     *
     * @return $this
     */
    protected function setOptionTradingLevel(string $optionTradingLevel): self
    {
        $this->optionTradingLevel = $optionTradingLevel;

        return $this;
    }

    public function __construct(array $authorizations = [])
    {
        $this
            ->setApex($authorizations['apex'] ?? false)
            ->setLevelTwoQuotes($authorizations['levelTwoQuotes'] ?? false)
            ->setStockTrading($authorizations['stockTrading'] ?? false)
            ->setMarginTrading($authorizations['marginTrading'] ?? false)
            ->setStreamingNews($authorizations['streamingNews'] ?? false)
            ->setOptionTradingLevel($authorizations['optionTradingLevel'] ?? '')
            ->setStreamerAccess($authorizations['streamerAccess'] ?? false)
            ->setAdvancedMargin($authorizations['advancedMargin'] ?? false)
            ->setScottradeAccount($authorizations['scottradeAccount'] ?? false)
        ;
    }

    /**
     * @return bool
     */
    public function isApex(): bool
    {
        return $this->apex;
    }

    /**
     * @return bool
     */
    public function isLevelTwoQuotes(): bool
    {
        return $this->levelTwoQuotes;
    }

    /**
     * @return bool
     */
    public function isStockTrading(): bool
    {
        return $this->stockTrading;
    }

    /**
     * @return bool
     */
    public function isMarginTrading(): bool
    {
        return $this->marginTrading;
    }

    /**
     * @return bool
     */
    public function isStreamingNews(): bool
    {
        return $this->streamingNews;
    }

    /**
     * @return bool
     */
    public function isStreamerAccess(): bool
    {
        return $this->streamerAccess;
    }

    /**
     * @return bool
     */
    public function isAdvancedMargin(): bool
    {
        return $this->advancedMargin;
    }

    /**
     * @return bool
     */
    public function isScottradeAccount(): bool
    {
        return $this->scottradeAccount;
    }

    /**
     * @return string
     */
    public function getOptionTradingLevel(): string
    {
        return $this->optionTradingLevel;
    }

}
