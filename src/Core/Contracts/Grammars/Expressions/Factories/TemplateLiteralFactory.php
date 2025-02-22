<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NoSubstitutionTemplate;

interface TemplateLiteralFactory
{
    public function create(NoSubstitutionTemplate $noSubstitutionTemplate): TemplateLiteral;
}
