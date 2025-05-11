<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JsonObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface SerializeJSONObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-serializejsonobject
     *
     * @param array{
     *     Stack: ListValue<LanguageValue>, 
     *     Indent: StringValue, 
     *     Gap: StringValue, 
     *     ReplacerFunction: UndefinedValue|ObjectValue, 
     *     PropertyList: UndefinedValue|ListValue<LanguageValue>
     * } $state
     * @throws AbruptCompletion
     */
    public function __invoke(array $state, LanguageValue $value): StringValue;
}
