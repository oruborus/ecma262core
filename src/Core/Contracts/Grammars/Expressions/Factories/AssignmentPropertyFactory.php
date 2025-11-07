<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\IdentifierReference;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentPropertyFactory
{
    public function create(
        PropertyName $propertyName,
        AssignmentElement $assignmentElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentProperty;

    public function createWithIdentifierReference(
        IdentifierReference $identifierReference,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentProperty;

    public function createWithIdentifierReferenceAndInitializer(
        IdentifierReference $identifierReference,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentProperty;
}
