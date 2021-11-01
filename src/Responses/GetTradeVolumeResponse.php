<?php

namespace Butschster\Kraken\Responses;

use Butschster\Kraken\Responses\Entities\TradeVolume;

class GetTradeVolumeResponse extends AbstractResponse
{
    public ?TradeVolume $result = null;
}
