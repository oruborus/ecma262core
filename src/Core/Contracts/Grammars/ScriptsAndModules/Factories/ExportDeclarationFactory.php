<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportFromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\FromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\NamedExports;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Declaration;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\HoistableDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableStatement;

interface ExportDeclarationFactory
{
    public function createWithExportFromClause(ExportFromClause $exportFromClause, FromClause $fromClause): ExportDeclaration;

    public function createWithNamedExports(NamedExports $namedExports): ExportDeclaration;

    public function createWithVariableStatement(VariableStatement $variableStatement): ExportDeclaration;

    public function createWithDeclaration(Declaration $declaration): ExportDeclaration;

    public function createWithHoistableDeclaration(HoistableDeclaration $hoistableDeclaration): ExportDeclaration;

    public function createWithClassDeclaration(ClassDeclaration $classDeclaration): ExportDeclaration;

    public function createWithAssignmentExpression(AssignmentExpression $assignmentExpression): ExportDeclaration;
}
