<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface UpdateModifiers
{
    /** @see https://tc39.es/ecma262/#sec-updatemodifiers */
    public function __invoke(
        RegExpRecord $rer,
        StringValue $add,
        StringValue $remove,
    ): RegExpRecord;
}
