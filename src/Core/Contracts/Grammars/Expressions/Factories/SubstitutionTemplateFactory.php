<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\SubstitutionTemplate;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateSpans;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateHead;

interface SubstitutionTemplateFactory
{
    public function create(TemplateHead $templateHead, Expression $expression, TemplateSpans $templateSpans): SubstitutionTemplate;
}
