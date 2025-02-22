<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Scripts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Script;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;

interface GlobalDeclarationInstantiation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-globaldeclarationinstantiation
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, Script $script, EnvironmentRecord $environment): null;
}
