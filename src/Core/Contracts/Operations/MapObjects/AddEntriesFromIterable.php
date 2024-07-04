<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\MapObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AddEntriesFromIterable
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-add-entries-from-iterable
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $target, LanguageValue $iterable, ObjectValue $adder): ObjectValue;
}
