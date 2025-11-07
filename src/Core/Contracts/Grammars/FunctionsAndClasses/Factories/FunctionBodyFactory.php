<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionStatementList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FunctionBodyFactory
{
    public function create(
        FunctionStatementList $functionStatementList,
        BooleanValue $containsStrict,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FunctionBody;
}
