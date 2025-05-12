<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface CreateRegExpStringIterator
{
    /** @see https://tc39.es/ecma262/#sec-createregexpstringiterator */
    public function __invoke(ObjectValue $r, StringValue $s, BooleanValue $global, BooleanValue $fullUnicode): ObjectValue;
}
