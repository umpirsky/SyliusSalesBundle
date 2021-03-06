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

use Doctrine\Common\Collections\Collection;

/**
 * Order interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface OrderInterface extends AdjustableInterface
{
    /**
     * Get order id.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Is confirmed?
     *
     * @return Boolean
     */
    public function isConfirmed();

    /**
     * Set confirmed.
     *
     * @param Boolean $confirmed
     */
    public function setConfirmed($confirmed);

    /**
     * Generate confirmation token.
     */
    public function generateConfirmationToken();

    /**
     * Get confirmation token.
     *
     * @return string
     */
    public function getConfirmationToken();

    /**
     * Set confirmation token.
     *
     * @param string $confirmationToken
     */
    public function setConfirmationToken($confirmationToken);

    /**
     * Get order items.
     *
     * @return array An array or collection of OrderItemInterface
     */
    public function getItems();

    /**
     * Set items.
     *
     * @param Collection $items
     */
    public function setItems(Collection $items);

    /**
     * Returns number of order items.
     *
     * @return integer
     */
    public function countItems();

    /**
     * Adds item to order.
     *
     * @param OrderItemInterface $item
     */
    public function addItem(OrderItemInterface $item);

    /**
     * Remove item from order.
     *
     * @param OrderItemInterface $item
     */
    public function removeItem(OrderItemInterface $item);

    /**
     * Has item in order?
     *
     * @param Item
     */
    public function hasItem(OrderItemInterface $item);

    /**
     * Get items total.
     *
     * @return mixed
     */
    public function getItemsTotal();

    /**
     * Calculate items total based on the items
     * unit prices and quantities.
     */
    public function calculateItemsTotal();

    /**
     * Get order total.
     *
     * @return float
     */
    public function getTotal();

    /**
     * Set total.
     *
     * @param float $total
     */
    public function setTotal($total);

    /**
     * Calculate total.
     * Items total + Adjustments total.
     */
    public function calculateTotal();

    /**
     * Get creation time.
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Get modification time.
     *
     * @return \DateTime
     */
    public function getUpdatedAt();
}
