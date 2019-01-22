<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class ExpenseExpenseCategory
{
    /**
     * @var string
     */
    protected $unitPrice;
    /**
     * @var string
     */
    protected $unitName;

    /**
     * @return string
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(?string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }
}