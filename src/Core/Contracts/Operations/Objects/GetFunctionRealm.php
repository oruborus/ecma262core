<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;

interface GetFunctionRealm
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getfunctionrealm
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $obj): RealmRecord;
}
