<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Order;

class OrderTransitions
{
    const GRAPH = 'sylius_order';

    const SYLIUS_CREATE = 'create';
    const SYLIUS_CANCEL = 'cancel';
    const SYLIUS_FULFILL = 'fulfill';
}
