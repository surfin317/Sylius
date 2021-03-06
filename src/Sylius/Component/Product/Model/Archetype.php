<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Product\Model;

use Sylius\Component\Archetype\Model\Archetype as BaseArchetype;

/**
 * Default archetype implementation.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
class Archetype extends BaseArchetype implements ArchetypeInterface
{
    /**
     * {@inheritdoc}
     */
    protected function getTranslationClass()
    {
        return get_class().'Translation';
    }
}
