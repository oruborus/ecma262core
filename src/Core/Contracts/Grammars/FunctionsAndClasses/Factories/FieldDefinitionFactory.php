<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FieldDefinition;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FieldDefinitionFactory
{
    public function create(
        ClassElementName $classElementName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FieldDefinition;

    public function createWithInitializer(
        ClassElementName $classElementName,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FieldDefinition;
}
