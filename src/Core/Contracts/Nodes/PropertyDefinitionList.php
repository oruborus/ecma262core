<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasPropertyDefinitionEvaluation;

interface PropertyDefinitionList extends Node, HasPropertyDefinitionEvaluation
{
}
