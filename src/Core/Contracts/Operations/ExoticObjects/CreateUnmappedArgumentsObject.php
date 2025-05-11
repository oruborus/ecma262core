<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExoticObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateUnmappedArgumentsObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createunmappedargumentsobject
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function __invoke(ListValue $argumentsList): ObjectValue;
}
