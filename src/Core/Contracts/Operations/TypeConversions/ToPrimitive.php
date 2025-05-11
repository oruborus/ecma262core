<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ToPrimitive
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-toprimitive
     *
     * @param null|class-string<StringValue>|class-string<NumberValue> $preferredType
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $input, ?string $preferredType = null): LanguageValue;
}
