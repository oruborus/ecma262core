<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElement;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassStaticBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FieldDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\MethodDefinition;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ClassElementFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;

    public function createWithMethodDefinition(
        MethodDefinition $methodDefinition,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;

    public function createWithStaticMethodDefinition(
        MethodDefinition $methodDefinition,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;

    public function createWithFieldDefinition(
        FieldDefinition $fieldDefinition,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;

    public function createWithStaticFieldDefinition(
        FieldDefinition $fieldDefinition,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;

    public function createWithClassStaticBlock(
        ClassStaticBlock $classStaticBlock,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassElement;
}
