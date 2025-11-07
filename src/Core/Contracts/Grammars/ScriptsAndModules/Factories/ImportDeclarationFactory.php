<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\FromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ImportClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ImportDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleSpecifier;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\WithClause;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ImportDeclarationFactory
{
    public function createWithImportClauseAndFromClause(
        ImportClause $importClause,
        FromClause $fromClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportDeclaration;

    public function createWithImportClauseFromClauseAndWithClause(
        ImportClause $importClause,
        FromClause $fromClause,
        WithClause $withClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportDeclaration;

    public function createWithModuleSpecifier(
        ModuleSpecifier $moduleSpecifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportDeclaration;

    public function createWithModuleSpecifierAndWithClause(
        ModuleSpecifier $moduleSpecifier,
        WithClause $withClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportDeclaration;
}
