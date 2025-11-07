<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LabelledItem;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LabelledItemFactory
{
    public function createWithStatement(
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LabelledItem;

    public function createWithFunctionDeclaration(
        FunctionDeclaration $functionDeclaration,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LabelledItem;
}
