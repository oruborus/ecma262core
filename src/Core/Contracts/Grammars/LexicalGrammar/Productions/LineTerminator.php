<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

interface LineTerminator extends InputElementDiv, InputElementRegExp, InputElementRegExpOrTemplateTail, InputElementTemplateTail
{
    /** @see https://tc39.es/ecma262/#table-line-terminator-code-points */
    public const array CODE_POINTS = ['<LF>' => 0x000A, '<CR>' => 0x000D, '<LS>' => 0x2028, '<PS>' => 0x2029];
}
