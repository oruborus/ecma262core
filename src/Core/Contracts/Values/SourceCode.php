<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use ArrayAccess;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;
use Oru\EcmaScript\Core\Contracts\Position;

/** @extends ArrayAccess<Position, ?InputElement> */
interface SourceCode extends ArrayAccess
{
    public SourceText $sourceText { get; }

    public SourceCode $withDiv { get; }

    public SourceCode $withRegExp { get; }

    public SourceCode $withRegExpOrTemplateTail { get; }

    public SourceCode $withTemplateTail { get; }
}
