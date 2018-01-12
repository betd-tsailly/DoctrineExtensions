<?php

namespace Gedmo\Translatable;

/**
 * Implementing this interface enables foreignKey overriding
 */
interface TranslatableIdentifierInterface
{
    /**
     * Override identifier string on translatable internal table
     *
     * @return string
     */
    public function getTranslatableId();
}
