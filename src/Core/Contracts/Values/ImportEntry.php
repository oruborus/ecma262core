<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface ImportEntry extends SpecificationValue
{
    public function moduleRequest(): StringValue;

    /**
     * @return StringValue|ImportName::NAMESPACE_OBJECT
     *
     * @psalm-mutation-free
     */
    public function importName(): StringValue|ImportName;

    public function localName(): StringValue;
}
