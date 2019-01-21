<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class EstimateItemCategoriesEstimateItemCategoryIdPatchBody
{
    /**
     * The name of the estimate item category.
     *
     * @var string
     */
    protected $name;

    /**
     * The name of the estimate item category.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the estimate item category.
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
}
