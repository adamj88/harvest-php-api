<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class ExpenseCategoriesPostBody
{
    /**
     * The name of the expense category.
     *
     * @var string
     */
    protected $name;
    /**
     * The unit name of the expense category.
     *
     * @var string
     */
    protected $unitName;
    /**
     * The unit price of the expense category.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * Whether the expense category is active or archived. Defaults to true.
     *
     * @var bool
     */
    protected $isActive;

    /**
     * The name of the expense category.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the expense category.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The unit name of the expense category.
     *
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * The unit name of the expense category.
     *
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(?string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * The unit price of the expense category.
     *
     * @return float
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    /**
     * The unit price of the expense category.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Whether the expense category is active or archived. Defaults to true.
     *
     * @return bool
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the expense category is active or archived. Defaults to true.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
