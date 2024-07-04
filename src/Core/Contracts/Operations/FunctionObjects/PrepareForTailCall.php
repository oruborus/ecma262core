<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;

interface PrepareForTailCall
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-preparefortailcall
     */
    public function __invoke(Agent $agent): void;
}
