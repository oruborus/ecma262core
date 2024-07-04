<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface AsyncGeneratorReject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorreject
     */
    public function __invoke(Agent $agent, ObjectValue $generator, LanguageValue $exception): UndefinedValue;
}
