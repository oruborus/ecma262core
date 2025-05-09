<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasPropertyDefinitionEvaluation;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;

interface PropertyDefinitionList extends Node, HasContains, HasPropertyDefinitionEvaluation {}
