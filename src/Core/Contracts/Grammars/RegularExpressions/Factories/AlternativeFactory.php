<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Alternative;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Term;

interface AlternativeFactory
{
    public function create(Alternative $alternative, Term $term): Alternative;

    public function createEmpty(): Alternative;
}
