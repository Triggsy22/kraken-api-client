<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses\Entities;

use Brick\Math\BigDecimal;

class TradeVolumeFee
{
    private float $percentFee;
    private float $percentMinFee;
    private float $percentMaxFee;
    private ?float $percentNextFee;
    private ?BigDecimal $tierVolume;
    private ?BigDecimal $nextVolume;

    public function __construct(string $fee, string $minfee, string $maxfee, ?string $nextfee, ?string $nextvolume, ?string $tiervolume)
    {
        $this->percentFee = floatval($fee);
        $this->percentMinFee = floatval($minfee);
        $this->percentMaxFee = floatval($maxfee);
        $this->percentNextFee = $nextfee === null ? null : floatval($nextfee);
        $this->nextVolume = $nextvolume === null ? null : BigDecimal::of($nextvolume);
        $this->tierVolume = $tiervolume === null ? null : BigDecimal::of($tiervolume);
    }

    /**
     * @return float
     */
    public function getPercentFee(): float
    {
        return $this->percentFee;
    }

    /**
     * @return float
     */
    public function getPercentMinFee(): float
    {
        return $this->percentMinFee;
    }

    /**
     * @return float
     */
    public function getPercentMaxFee(): float
    {
        return $this->percentMaxFee;
    }

    /**
     * @return float|null
     */
    public function getPercentNextFee(): ?float
    {
        return $this->percentNextFee;
    }

    /**
     * @return BigDecimal|null
     */
    public function getTierVolume(): ?BigDecimal
    {
        return $this->tierVolume;
    }

    /**
     * @return BigDecimal|null
     */
    public function getNextVolume(): ?BigDecimal
    {
        return $this->nextVolume;
    }
}
