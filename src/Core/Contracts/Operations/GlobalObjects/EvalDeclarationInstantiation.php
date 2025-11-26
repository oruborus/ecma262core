<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GlobalObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ScriptBody;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\DeclarativeEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\PrivateEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface EvalDeclarationInstantiation
{
    /**
     * @see https://tc39.es/ecma262/#sec-evaldeclarationinstantiation
     *
     * @throws AbruptCompletion
     */
    public function __invoke(
        ScriptBody $body,
        EnvironmentRecord $varEnv,
        DeclarativeEnvironmentRecord $lexEnv,
        PrivateEnvironmentRecord|NullValue $privateEnv,
        BooleanValue $strict,
    ): UnusedValue;
}
