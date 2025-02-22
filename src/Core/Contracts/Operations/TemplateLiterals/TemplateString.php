<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TemplateLiterals;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NoSubstitutionTemplate;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateHead;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateMiddle;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateTail;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface TemplateString
{
    /**
     * @see https://tc39.es/ecma262/#sec-templatestring
     */
    public function __invoke(
        Agent $agent,
        NoSubstitutionTemplate|TemplateHead|TemplateMiddle|TemplateTail $templateToken,
        BooleanValue $raw,
    ): StringValue|UndefinedValue;
}
