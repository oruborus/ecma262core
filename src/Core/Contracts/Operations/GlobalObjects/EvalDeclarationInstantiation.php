<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GlobalObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Script;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;

interface EvalDeclarationInstantiation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaldeclarationinstantiation
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Script $body, EnvironmentRecord $varEnv, EnvironmentRecord $lexEnv, BooleanValue $strict): null;
}
