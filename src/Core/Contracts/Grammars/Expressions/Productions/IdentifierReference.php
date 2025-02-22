<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasStringValue;

interface IdentifierReference extends PrimaryExpression, PropertyDefinition, HasStringValue {}
