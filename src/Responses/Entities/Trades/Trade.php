<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses\Entities\Trades;

use JMS\Serializer\Annotation\Type;

use Brick\Math\BigDecimal;

class Trade
{
    public string $ordertxid;
    public string $postxid;
    public string $pair;
    /** @Type("BigDecimal")*/
    public BigDecimal $time;
    public string $type;
    public string $ordertype;
    /** @Type("BigDecimal")*/
    public BigDecimal $price;
    /** @Type("BigDecimal")*/
    public BigDecimal $cost;
    /** @Type("BigDecimal")*/
    public BigDecimal $fee;
    /** @Type("BigDecimal")*/
    public BigDecimal $vol;
    /** @Type("BigDecimal")*/
    public BigDecimal $margin;
    public string $misc;

    public string $posstatus;
    public $cprice;
    public $ccost;
    public $cfee;
    public $cvol;
    public $cmargin;
    public $net;

    /**
     * @Type("array<string>")
     */
    public array $trades = [];
}
