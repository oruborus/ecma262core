<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use ArrayAccess;
use Oru\EcmaScript\Core\Contracts\Position;
use Stringable;

/** 
 * @extends ListValue<int<0, 1114111>>
 * @extends ArrayAccess<non-negative-int|Position, int<0, 1114111>>
 */
interface SourceText extends ListValue, ArrayAccess, Stringable
{
    /**
     * @param non-negative-int|Position $offset
     * @param ?positive-int $size
     */
    public function slice(int|Position $offset, ?int $size = null): static;
}
