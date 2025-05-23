<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncFunctionObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Module;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface AsyncBlockStart
{
    /**
     * @see https://tc39.es/ecma262/#sec-asyncblockstart
     */
    public function __invoke(PromiseCapabilityRecord $promiseCapability, FunctionBody|ExpressionBody|Module $asyncBody, ExecutionContext $asyncContext): UnusedValue;
}
