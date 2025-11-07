<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LexicalDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableDeclarationList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ForStatementFactory
{
    public function create(
        ?Expression $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForStatement;

    public function createWithVariableDeclarationList(
        VariableDeclarationList $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForStatement;

    public function createWithLexicalDeclaration(
        LexicalDeclaration $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForStatement;
}
