<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DataBlocks;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\DataBlock;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface CreateByteDataBlock
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createbytedatablock
     *
     * @throws AbruptCompletion
     */
    public function __invoke(NumberValue $size): DataBlock;
}
