<?php

namespace Gedmo\Translatable;

/**
 * Interface ExtendedTranslationEntityInterface
 */
interface ExtendedTranslationEntityInterface
{
    /**
     * @param array $configuration
     *
     * @return $this
     */
    public function setExtendedProperties($configuration);
}