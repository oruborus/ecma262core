<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface CreateListFromArrayLike
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createlistfromarraylike
     *
     * @param ?ListValue<StringValue> $elementTypes
     * @return ListValue<LanguageValue>
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $obj, ?ListValue $elementTypes = null): ListValue;
}
