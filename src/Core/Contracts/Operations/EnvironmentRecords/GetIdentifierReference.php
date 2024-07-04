<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetIdentifierReference
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getidentifierreference
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, EnvironmentRecord|NullValue $env, StringValue $name, BooleanValue $strict): ReferenceRecord;
}
