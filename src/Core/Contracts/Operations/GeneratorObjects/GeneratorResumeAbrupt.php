<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ReturnCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface GeneratorResumeAbrupt
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-generatorresumeabrupt
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $generator, ReturnCompletion|ThrowCompletion $abruptCompletion, GeneratorBrand $generatorBrand): LanguageValue;
}
