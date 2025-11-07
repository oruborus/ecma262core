<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

interface RegularExpressionLiteral extends InputElementRegExp, InputElementRegExpOrTemplateTail, InputElementHashbangOrRegExp
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-bodytext
     *
     * @return array<int, int>
     */
    public function bodyText(): array;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-flagtext
     *
     * @return array<int, int>
     */
    public function flagText(): array;
}
