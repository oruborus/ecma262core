<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface EnumerableOwnPropertyNames
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-enumerableownpropertynames
     *
     * @return ListValue<LanguageValue>
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $o, string $kind): ListValue;
}
