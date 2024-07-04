<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GeneratorResume
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-generatorresume
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $generator, LanguageValue $value, GeneratorBrand $generatorBrand): LanguageValue;
}
