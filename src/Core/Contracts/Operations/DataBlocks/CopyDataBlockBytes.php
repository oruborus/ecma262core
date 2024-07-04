<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DataBlocks;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\DataBlock;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface CopyDataBlockBytes
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-copydatablockbytes
     */
    public function __invoke(Agent $agent, DataBlock $toBlock, NumberValue $toIndex, DataBlock $fromBlock, NumberValue $fromIndex, NumberValue $count): null;
}
