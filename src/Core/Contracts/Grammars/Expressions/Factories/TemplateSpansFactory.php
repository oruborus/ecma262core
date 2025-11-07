<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateMiddleList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateSpans;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateTail;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface TemplateSpansFactory
{
    public function create(
        TemplateMiddleList $templateMiddleList,
        TemplateTail $templateTail,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TemplateSpans;

    public function createWithoutTemplateMiddleList(
        TemplateTail $templateTail,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TemplateSpans;
}
