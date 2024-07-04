<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ReferenceRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;
use Oru\EcmaScript\Core\Contracts\Values\Value;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsSuperReference
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-issuperreference
     *
     * @psalm-assert ReferenceRecord $v
     */
    public function __invoke(Agent $agent, Value $v): BooleanValue;
}
