<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ReferenceRecords;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;
use Oru\EcmaScript\Core\Contracts\Values\Value;

interface IsPropertyReference
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ispropertyreference
     *
     * @psalm-assert ReferenceRecord $v
     */
    public function __invoke(Value $v): BooleanValue;
}
