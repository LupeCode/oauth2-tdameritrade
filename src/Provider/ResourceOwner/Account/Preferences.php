<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner\Account;

class Preferences
{
    /** @var bool */
    protected $expressTrading;
    /** @var bool */
    protected $directOptionsRouting;
    /** @var bool */
    protected $directEquityRouting;
    /** @var string */
    protected $defaultEquityOrderLegInstruction;
    /** @var string */
    protected $defaultEquityOrderType;
    /** @var string */
    protected $defaultEquityOrderPriceLinkType;
    /** @var string */
    protected $defaultEquityOrderDuration;
    /** @var string */
    protected $defaultEquityOrderMarketSession;
    /** @var int */
    protected $defaultEquityQuantity;
    /** @var string */
    protected $mutualFundTaxLotMethod;
    /** @var string */
    protected $optionTaxLotMethod;
    /** @var string */
    protected $equityTaxLotMethod;
    /** @var string */
    protected $defaultAdvancedToolLaunch;
    /** @var string */
    protected $authTokenTimeout;

    /**
     * @param bool $expressTrading
     *
     * @return $this
     */
    protected function setExpressTrading(bool $expressTrading)
    {
        $this->expressTrading = $expressTrading;

        return $this;
    }

    /**
     * @param bool $directOptionsRouting
     *
     * @return $this
     */
    protected function setDirectOptionsRouting(bool $directOptionsRouting)
    {
        $this->directOptionsRouting = $directOptionsRouting;

        return $this;
    }

    /**
     * @param bool $directEquityRouting
     *
     * @return $this
     */
    protected function setDirectEquityRouting(bool $directEquityRouting)
    {
        $this->directEquityRouting = $directEquityRouting;

        return $this;
    }

    /**
     * @param string $defaultEquityOrderLegInstruction
     *
     * @return $this
     */
    protected function setDefaultEquityOrderLegInstruction(string $defaultEquityOrderLegInstruction)
    {
        $this->defaultEquityOrderLegInstruction = $defaultEquityOrderLegInstruction;

        return $this;
    }

    /**
     * @param string $defaultEquityOrderType
     *
     * @return $this
     */
    protected function setDefaultEquityOrderType(string $defaultEquityOrderType)
    {
        $this->defaultEquityOrderType = $defaultEquityOrderType;

        return $this;
    }

    /**
     * @param string $defaultEquityOrderPriceLinkType
     *
     * @return $this
     */
    protected function setDefaultEquityOrderPriceLinkType(string $defaultEquityOrderPriceLinkType)
    {
        $this->defaultEquityOrderPriceLinkType = $defaultEquityOrderPriceLinkType;

        return $this;
    }

    /**
     * @param string $defaultEquityOrderDuration
     *
     * @return $this
     */
    protected function setDefaultEquityOrderDuration(string $defaultEquityOrderDuration)
    {
        $this->defaultEquityOrderDuration = $defaultEquityOrderDuration;

        return $this;
    }

    /**
     * @param string $defaultEquityOrderMarketSession
     *
     * @return $this
     */
    protected function setDefaultEquityOrderMarketSession(string $defaultEquityOrderMarketSession)
    {
        $this->defaultEquityOrderMarketSession = $defaultEquityOrderMarketSession;

        return $this;
    }

    /**
     * @param int $defaultEquityQuantity
     *
     * @return $this
     */
    protected function setDefaultEquityQuantity(int $defaultEquityQuantity)
    {
        $this->defaultEquityQuantity = $defaultEquityQuantity;

        return $this;
    }

    /**
     * @param string $mutualFundTaxLotMethod
     *
     * @return $this
     */
    protected function setMutualFundTaxLotMethod(string $mutualFundTaxLotMethod)
    {
        $this->mutualFundTaxLotMethod = $mutualFundTaxLotMethod;

        return $this;
    }

    /**
     * @param string $optionTaxLotMethod
     *
     * @return $this
     */
    protected function setOptionTaxLotMethod(string $optionTaxLotMethod)
    {
        $this->optionTaxLotMethod = $optionTaxLotMethod;

        return $this;
    }

    /**
     * @param string $equityTaxLotMethod
     *
     * @return $this
     */
    protected function setEquityTaxLotMethod(string $equityTaxLotMethod)
    {
        $this->equityTaxLotMethod = $equityTaxLotMethod;

        return $this;
    }

    /**
     * @param string $defaultAdvancedToolLaunch
     *
     * @return $this
     */
    protected function setDefaultAdvancedToolLaunch(string $defaultAdvancedToolLaunch)
    {
        $this->defaultAdvancedToolLaunch = $defaultAdvancedToolLaunch;

        return $this;
    }

    /**
     * @param string $authTokenTimeout
     *
     * @return $this
     */
    protected function setAuthTokenTimeout(string $authTokenTimeout)
    {
        $this->authTokenTimeout = $authTokenTimeout;

        return $this;
    }

    public function __construct(array $preferences)
    {
        $this
            ->setExpressTrading($preferences['expressTrading'] ?? false)
            ->setDirectOptionsRouting($preferences['directOptionsRouting'] ?? false)
            ->setDirectEquityRouting($preferences['directEquityRouting'] ?? false)
            ->setDefaultEquityOrderLegInstruction($preferences['defaultEquityOrderLegInstruction'] ?? '')
            ->setDefaultEquityOrderType($preferences['defaultEquityOrderType'] ?? '')
            ->setDefaultEquityOrderPriceLinkType($preferences['defaultEquityOrderPriceLinkType'] ?? '')
            ->setDefaultEquityOrderDuration($preferences['defaultEquityOrderDuration'] ?? '')
            ->setDefaultEquityOrderMarketSession($preferences['defaultEquityOrderMarketSession'] ?? '')
            ->setDefaultEquityQuantity($preferences['defaultEquityQuantity'] ?? 0)
            ->setMutualFundTaxLotMethod($preferences['mutualFundTaxLotMethod'] ?? '')
            ->setOptionTaxLotMethod($preferences['optionTaxLotMethod'] ?? '')
            ->setEquityTaxLotMethod($preferences['equityTaxLotMethod'] ?? '')
            ->setDefaultAdvancedToolLaunch($preferences['defaultAdvancedToolLaunch'] ?? '')
            ->setAuthTokenTimeout($preferences['authTokenTimeout'] ?? '')
        ;
    }

    /**
     * @return bool
     */
    public function isExpressTrading(): bool
    {
        return $this->expressTrading;
    }

    /**
     * @return bool
     */
    public function isDirectOptionsRouting(): bool
    {
        return $this->directOptionsRouting;
    }

    /**
     * @return bool
     */
    public function isDirectEquityRouting(): bool
    {
        return $this->directEquityRouting;
    }

    /**
     * @return string
     */
    public function getDefaultEquityOrderLegInstruction(): string
    {
        return $this->defaultEquityOrderLegInstruction;
    }

    /**
     * @return string
     */
    public function getDefaultEquityOrderType(): string
    {
        return $this->defaultEquityOrderType;
    }

    /**
     * @return string
     */
    public function getDefaultEquityOrderPriceLinkType(): string
    {
        return $this->defaultEquityOrderPriceLinkType;
    }

    /**
     * @return string
     */
    public function getDefaultEquityOrderDuration(): string
    {
        return $this->defaultEquityOrderDuration;
    }

    /**
     * @return string
     */
    public function getDefaultEquityOrderMarketSession(): string
    {
        return $this->defaultEquityOrderMarketSession;
    }

    /**
     * @return int
     */
    public function getDefaultEquityQuantity(): int
    {
        return $this->defaultEquityQuantity;
    }

    /**
     * @return string
     */
    public function getMutualFundTaxLotMethod(): string
    {
        return $this->mutualFundTaxLotMethod;
    }

    /**
     * @return string
     */
    public function getOptionTaxLotMethod(): string
    {
        return $this->optionTaxLotMethod;
    }

    /**
     * @return string
     */
    public function getEquityTaxLotMethod(): string
    {
        return $this->equityTaxLotMethod;
    }

    /**
     * @return string
     */
    public function getDefaultAdvancedToolLaunch(): string
    {
        return $this->defaultAdvancedToolLaunch;
    }

    /**
     * @return string
     */
    public function getAuthTokenTimeout(): string
    {
        return $this->authTokenTimeout;
    }
}
