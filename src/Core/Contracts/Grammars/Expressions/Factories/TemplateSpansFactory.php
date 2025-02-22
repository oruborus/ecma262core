<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateMiddleList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateSpans;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateTail;

interface TemplateSpansFactory
{
    public function create(TemplateMiddleList $templateMiddleList, TemplateTail $templateTail): TemplateSpans;

    public function createWithoutTemplateMiddleList(TemplateTail $templateTail): TemplateSpans;
}
