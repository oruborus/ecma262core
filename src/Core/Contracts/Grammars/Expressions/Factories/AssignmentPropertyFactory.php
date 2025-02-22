<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\IdentifierReference;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;

interface AssignmentPropertyFactory
{
    public function create(PropertyName $propertyName, AssignmentElement $assignmentElement): AssignmentProperty;

    public function createWithIdentifierReference(
        IdentifierReference $identifierReference,
        ?Initializer $initializer,
    ): AssignmentProperty;
}
