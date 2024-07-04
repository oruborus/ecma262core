<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * @template-extends ArrayAccess<int, int>
 * @template-extends Iterator<int, int>
 */
interface DataBlock extends SpecificationValue, ArrayAccess, Iterator, Countable
{
}
