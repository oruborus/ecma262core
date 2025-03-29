<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierPartChar;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpIdentifierPart;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpUnicodeEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegExpIdentifierPartFactory
{
    public function create(
        IdentifierPartChar $identifierPartChar,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpIdentifierPart;

    public function createWithEscapeSequence(
        RegExpUnicodeEscapeSequence $regExpUnicodeEscapeSequence,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpIdentifierPart;

    /**
     * @param int<55296, 56575> $unicodeLeadSurrogate
     * @param int<56576, 57343> $unicodeTrailSurrogate
     */
    public function createWithSurrogates(
        int $unicodeLeadSurrogate,
        int $unicodeTrailSurrogate,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpIdentifierPart;
}
