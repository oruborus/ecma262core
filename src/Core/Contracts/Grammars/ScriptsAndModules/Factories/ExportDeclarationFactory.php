<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportFromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\FromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\NamedExports;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\WithClause;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Declaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\HoistableDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExportDeclarationFactory
{
    public function createWithExportFromClause(
        ExportFromClause $exportFromClause,
        FromClause $fromClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithExportFromClauseAndWithClause(
        ExportFromClause $exportFromClause,
        FromClause $fromClause,
        WithClause $withClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithNamedExports(
        NamedExports $namedExports,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithVariableStatement(
        VariableStatement $variableStatement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithDeclaration(
        Declaration $declaration,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithHoistableDeclaration(
        HoistableDeclaration $hoistableDeclaration,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithClassDeclaration(
        ClassDeclaration $classDeclaration,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;

    public function createWithAssignmentExpression(
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportDeclaration;
}
