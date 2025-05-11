<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SetObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateSetIterator
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createsetiterator
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $set, string $kind): ObjectValue;
}
