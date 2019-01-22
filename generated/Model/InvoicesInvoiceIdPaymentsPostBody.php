<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPaymentsPostBody
{
    /**
     * The amount of the payment.
     *
     * @var float
     */
    protected $amount;
    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @var \DateTime
     */
    protected $paidAt;
    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @var string
     */
    protected $paidDate;
    /**
     * Any notes to be associated with the payment.
     *
     * @var string
     */
    protected $notes;

    /**
     * The amount of the payment.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The amount of the payment.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @return \DateTime
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @param \DateTime $paidAt
     *
     * @return self
     */
    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @return string
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }

    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @param string $paidDate
     *
     * @return self
     */
    public function setPaidDate(?string $paidDate): self
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Any notes to be associated with the payment.
     *
     * @return string
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any notes to be associated with the payment.
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}