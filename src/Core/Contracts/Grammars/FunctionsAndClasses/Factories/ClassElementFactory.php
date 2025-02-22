<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElement;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassStaticBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FieldDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\MethodDefinition;

interface ClassElementFactory
{
    public function createEmpty(): ClassElement;

    public function createWithMethodDefinition(MethodDefinition $methodDefinition): ClassElement;

    public function createWithStaticMethodDefinition(MethodDefinition $methodDefinition): ClassElement;

    public function createWithFieldDefinition(FieldDefinition $fieldDefinition): ClassElement;

    public function createWithStaticFieldDefinition(FieldDefinition $fieldDefinition): ClassElement;

    public function createWithClassStaticBlock(ClassStaticBlock $classStaticBlock): ClassElement;
}
