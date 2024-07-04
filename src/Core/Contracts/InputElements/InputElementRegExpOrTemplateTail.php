<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

/**
 * The InputElementRegExp goal symbol is used in all syntactic grammar contexts where
 * a RegularExpressionLiteral is permitted but neither a TemplateMiddle, nor a TemplateTail is permitted.
 */
interface InputElementRegExpOrTemplateTail extends InputElement
{
}
