<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

interface IsIDContinue
{
    public function __invoke(int $codePoint): bool;
}
