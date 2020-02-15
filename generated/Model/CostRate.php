<?php

namespace JoliCode\Harvest\Api\Model;

class CostRate
{
    /**
     * Unique ID for the cost rate.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The amount of the cost rate.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The date the cost rate is effective.
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * Date and time the cost rate was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the cost rate was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the cost rate.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the cost rate.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The amount of the cost rate.
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * The amount of the cost rate.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * The date the cost rate is effective.
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * The date the cost rate is effective.
     *
     * @param \DateTime|null $startDate
     *
     * @return self
     */
    public function setStartDate(?\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     *
     * @return \DateTime|null
     */
    public function getEndDate() : ?\DateTime
    {
        return $this->endDate;
    }
    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     *
     * @param \DateTime|null $endDate
     *
     * @return self
     */
    public function setEndDate(?\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Date and time the cost rate was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the cost rate was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the cost rate was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the cost rate was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}