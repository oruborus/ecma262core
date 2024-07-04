<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

/**
 * The InputElementTemplateTail goal is used in all syntactic grammar contexts where
 * a TemplateMiddle or a TemplateTail is permitted but a RegularExpressionLiteral is not permitted.
 */
interface InputElementTemplateTail extends InputElement
{
}
