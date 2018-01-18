<?php

namespace Gedmo\Mapping\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * FullyTranslatable annotation for Translatable behavioral extension
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
final class FullyTranslatable extends Annotation
{
    /** @var string @Required */
    public $class;
}
