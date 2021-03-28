<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner;

class ExchangeAgreementsAccepted
{
    /** @var string */
    protected $nyseExchangeAgreement;
    /** @var string */
    protected $opraExchangeAgreement;
    /** @var string */
    protected $nasdaqExchangeAgreement;

    /**
     * @param bool $nyseExchangeAgreement
     *
     * @return $this
     */
    protected function setNyseExchangeAgreement(string $nyseExchangeAgreement)
    {
        $this->nyseExchangeAgreement = $nyseExchangeAgreement;

        return $this;
    }

    /**
     * @param bool $opraExchangeAgreement
     *
     * @return $this
     */
    protected function setOpraExchangeAgreement(string $opraExchangeAgreement)
    {
        $this->opraExchangeAgreement = $opraExchangeAgreement;

        return $this;
    }

    /**
     * @param bool $nasdaqExchangeAgreement
     *
     * @return $this
     */
    protected function setNasdaqExchangeAgreement(string $nasdaqExchangeAgreement)
    {
        $this->nasdaqExchangeAgreement = $nasdaqExchangeAgreement;

        return $this;
    }

    public function __construct(array $agreements = [])
    {
        $this
            ->setNyseExchangeAgreement($agreements['NYSE_EXCHANGE_AGREEMENT'] ?? '')
            ->setOpraExchangeAgreement($agreements['OPRA_EXCHANGE_AGREEMENT'] ?? '')
            ->setNasdaqExchangeAgreement($agreements['NASDAQ_EXCHANGE_AGREEMENT'] ?? '')
        ;
    }

    /**
     * @return string
     */
    public function getNyseExchangeAgreement(): string
    {
        return $this->nyseExchangeAgreement;
    }

    /**
     * @return string
     */
    public function getOpraExchangeAgreement(): string
    {
        return $this->opraExchangeAgreement;
    }

    /**
     * @return string
     */
    public function getNasdaqExchangeAgreement(): string
    {
        return $this->nasdaqExchangeAgreement;
    }
}
