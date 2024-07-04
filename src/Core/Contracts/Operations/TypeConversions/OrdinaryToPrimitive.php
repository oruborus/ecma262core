<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface OrdinaryToPrimitive
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinarytoprimitive
     *
     * @param class-string<StringValue>|class-string<NumberValue> $hint
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $object, string $hint): LanguageValue;
}
