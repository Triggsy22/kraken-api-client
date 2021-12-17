<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses;

use JMS\Serializer\Annotation\Type;

class QueryTradesResponse extends AbstractResponse
{
    /** @Type("array<string, Butschster\Kraken\Responses\Entities\Trades\Trade>") */
    public ?array $result = null;
}
