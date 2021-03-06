<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SalesBundle\Model;

/**
 * Interface for order line item model.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface OrderItemInterface extends AdjustableInterface
{
    /**
     * Get order item id.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Return order.
     *
     * @return OrderInterface
     */
    public function getOrder();

    /**
     * Set order.
     *
     * @param OrderInterface $order
     */
    public function setOrder(OrderInterface $order = null);

    /**
     * Get item quantity.
     *
     * @return integer
     */
    public function getQuantity();

    /**
     * Set quantity.
     *
     * @param integer $quantity
     */
    public function setQuantity($quantity);

    /**
     * Get unit price of item.
     *
     * @return mixed
     */
    public function getUnitPrice();

    /**
     * Define the unit price of item.
     *
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice);

    /**
     * Get item total.
     *
     * @return mixed
     */
    public function getTotal();

    /**
     * Set item total.
     *
     * @param mixed $total
     */
    public function setTotal($total);

    /**
     * Calculate total based on quantity and unit price.
     * Take adjustments into accont.
     */
    public function calculateTotal();
}
