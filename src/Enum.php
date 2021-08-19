<?php

declare(strict_types=1);

namespace My\App;

/**
 * @template T
 * @extends \MyCLabs\Enum\Enum<T>
 * @psalm-immutable
 */
abstract class Enum extends \MyCLabs\Enum\Enum
{
    /**
     * @param T $value
     *
     * @inheritDoc
     */
    final public function __construct($value)
    {
        parent::__construct($value);
    }
}
