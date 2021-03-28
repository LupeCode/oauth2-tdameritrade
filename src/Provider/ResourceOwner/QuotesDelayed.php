<?php

namespace LupeCode\OAuth2\Client\Provider\ResourceOwner;

class QuotesDelayed
{
    /** @var bool */
    protected $isNyseDelayed;
    /** @var bool */
    protected $isNasdaqDelayed;
    /** @var bool */
    protected $isOpraDelayed;
    /** @var bool */
    protected $isAmexDelayed;
    /** @var bool */
    protected $isCmeDelayed;
    /** @var bool */
    protected $isIceDelayed;
    /** @var bool */
    protected $isForexDelayed;

    /**
     * @param bool $isNyseDelayed
     *
     * @return $this
     */
    protected function setIsNyseDelayed(bool $isNyseDelayed)
    {
        $this->isNyseDelayed = $isNyseDelayed;

        return $this;
    }

    /**
     * @param bool $isNasdaqDelayed
     *
     * @return $this
     */
    protected function setIsNasdaqDelayed(bool $isNasdaqDelayed)
    {
        $this->isNasdaqDelayed = $isNasdaqDelayed;

        return $this;
    }

    /**
     * @param bool $isOpraDelayed
     *
     * @return $this
     */
    protected function setIsOpraDelayed(bool $isOpraDelayed)
    {
        $this->isOpraDelayed = $isOpraDelayed;

        return $this;
    }

    /**
     * @param bool $isAmexDelayed
     *
     * @return $this
     */
    protected function setIsAmexDelayed(bool $isAmexDelayed)
    {
        $this->isAmexDelayed = $isAmexDelayed;

        return $this;
    }

    /**
     * @param bool $isCmeDelayed
     *
     * @return $this
     */
    protected function setIsCmeDelayed(bool $isCmeDelayed)
    {
        $this->isCmeDelayed = $isCmeDelayed;

        return $this;
    }

    /**
     * @param bool $isIceDelayed
     *
     * @return $this
     */
    protected function setIsIceDelayed(bool $isIceDelayed)
    {
        $this->isIceDelayed = $isIceDelayed;

        return $this;
    }

    /**
     * @param bool $isForexDelayed
     *
     * @return $this
     */
    protected function setIsForexDelayed(bool $isForexDelayed)
    {
        $this->isForexDelayed = $isForexDelayed;

        return $this;
    }

    public function __construct(array $quotes = [])
    {
        $this
            ->setIsNyseDelayed($quotes['isNyseDelayed'] ?? true)
            ->setIsNasdaqDelayed($quotes['isNasdaqDelayed'] ?? true)
            ->setIsOpraDelayed($quotes['isOpraDelayed'] ?? true)
            ->setIsAmexDelayed($quotes['isAmexDelayed'] ?? true)
            ->setIsCmeDelayed($quotes['isCmeDelayed'] ?? true)
            ->setIsIceDelayed($quotes['isIceDelayed'] ?? true)
            ->setIsForexDelayed($quotes['isForexDelayed'] ?? true)
        ;
    }

    /**
     * @return bool
     */
    public function isNyseDelayed(): bool
    {
        return $this->isNyseDelayed;
    }

    /**
     * @return bool
     */
    public function isNasdaqDelayed(): bool
    {
        return $this->isNasdaqDelayed;
    }

    /**
     * @return bool
     */
    public function isOpraDelayed(): bool
    {
        return $this->isOpraDelayed;
    }

    /**
     * @return bool
     */
    public function isAmexDelayed(): bool
    {
        return $this->isAmexDelayed;
    }

    /**
     * @return bool
     */
    public function isCmeDelayed(): bool
    {
        return $this->isCmeDelayed;
    }

    /**
     * @return bool
     */
    public function isIceDelayed(): bool
    {
        return $this->isIceDelayed;
    }

    /**
     * @return bool
     */
    public function isForexDelayed(): bool
    {
        return $this->isForexDelayed;
    }

}
