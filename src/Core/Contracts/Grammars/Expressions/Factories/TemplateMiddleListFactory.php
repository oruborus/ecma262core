<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateMiddleList;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateMiddle;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface TemplateMiddleListFactory
{
    public function create(
        ?TemplateMiddleList $templateMiddleList,
        TemplateMiddle $templateMiddle,
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TemplateMiddleList;
}
