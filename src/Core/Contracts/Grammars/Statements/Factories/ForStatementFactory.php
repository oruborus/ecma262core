<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LexicalDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableDeclarationList;

interface ForStatementFactory
{
    public function create(
        ?Expression $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
    ): ForStatement;

    public function createWithVariableDeclarationList(
        VariableDeclarationList $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
    ): ForStatement;

    public function createWithLexicalDeclaration(
        LexicalDeclaration $initialization,
        ?Expression $condition,
        ?Expression $afterthought,
        Statement $statement,
    ): ForStatement;
}
