<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface ExportEntry extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function exportName(): StringValue|NullValue;

    /**
     * @psalm-mutation-free
     */
    public function moduleRequest(): StringValue|NullValue;

    /**
     * @psalm-mutation-free
     *
     * @return StringValue|NullValue|ImportName::ALL|ImportName::ALL_BUT_DEFAULT
     */
    public function importName(): StringValue|NullValue|ImportName;

    /**
     * @psalm-mutation-free
     */
    public function localName(): StringValue|NullValue;
}
