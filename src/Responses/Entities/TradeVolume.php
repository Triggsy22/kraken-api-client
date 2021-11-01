<?php

namespace Butschster\Kraken\Responses\Entities;

use Brick\Math\BigDecimal;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;

class TradeVolume
{
    /**
     * Volume currency
     */
    public string $currency;

    /**
     * Current discount volume
     * @Type("BigDecimal")
     */
    public BigDecimal $volume;

    /**
     * Taker Fees schedule array in [<percent fee>, <percent minfee>, <percent maxfee>, <percent nextfee>, <decimal|null nextvolume>, <decimal|null tiervolume>] tuples
     * @SerializedName("fees")
     * @Type("array")
     * @Accessor(setter="setFeesTaker")
     * @var TradeVolumeFee
     */
    public TradeVolumeFee $feesTaker;

    /**
     * Taker Fees schedule array in [<percent fee>, <percent minfee>, <percent maxfee>, <percent|null nextfee>, <decimal|null nextvolume>, <decimal|null tiervolume>] tuples
     * @SerializedName("fees_maker")
     * @Type("array")
     * @Accessor(setter="setFeesMaker")
     * @var TradeVolumeFee
     */
    public TradeVolumeFee $feesMaker;

    public function setFeesTaker(array $fees): void
    {
        $this->feesTaker = new TradeVolumeFee(...$fees[array_key_first($fees)]);
    }

    public function setFeesMaker(array $fees): void
    {
        $this->feesMaker = new TradeVolumeFee(...$fees[array_key_first($fees)]);
    }
}
