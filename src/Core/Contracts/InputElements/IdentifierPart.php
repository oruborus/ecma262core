<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

interface IdentifierPart extends InputElement
{
    public function containsUnicodeEscapeSequence(): bool;
}
