<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorKind;

interface GetGeneratorKind
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getgeneratorkind
     */
    public function __invoke(Agent $agent): GeneratorKind;
}
