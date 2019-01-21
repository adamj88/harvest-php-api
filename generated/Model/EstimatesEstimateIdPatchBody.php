<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class EstimatesEstimateIdPatchBody
{
    /**
     * The ID of the client this estimate belongs to.
     *
     * @var int
     */
    protected $clientId;
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @var string
     */
    protected $number;
    /**
     * The purchase order number.
     *
     * @var string
     */
    protected $purchaseOrder;
    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @var float
     */
    protected $tax;
    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @var float
     */
    protected $tax2;
    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     *
     * @var float
     */
    protected $discount;
    /**
     * The estimate subject.
     *
     * @var string
     */
    protected $subject;
    /**
     * Any additional notes to include on the estimate.
     *
     * @var string
     */
    protected $notes;
    /**
     * The currency used by the estimate. If not provided, the client’s currency will be used. See a list of supported currencies.
     *
     * @var string
     */
    protected $currency;
    /**
     * Date the estimate was issued.
     *
     * @var string
     */
    protected $issueDate;
    /**
     * Array of line item parameters.
     *
     * @var EstimatesEstimateIdPatchBodyLineItemsItem[]
     */
    protected $lineItems;

    /**
     * The ID of the client this estimate belongs to.
     *
     * @return int
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client this estimate belongs to.
     *
     * @param int $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * If no value is set, the number will be automatically generated.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * If no value is set, the number will be automatically generated.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The purchase order number.
     *
     * @return string
     */
    public function getPurchaseOrder(): ?string
    {
        return $this->purchaseOrder;
    }

    /**
     * The purchase order number.
     *
     * @param string $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(?string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @return float
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @param float $tax
     *
     * @return self
     */
    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @return float
     */
    public function getTax2(): ?float
    {
        return $this->tax2;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @param float $tax2
     *
     * @return self
     */
    public function setTax2(?float $tax2): self
    {
        $this->tax2 = $tax2;

        return $this;
    }

    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     *
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     *
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * The estimate subject.
     *
     * @return string
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The estimate subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Any additional notes to include on the estimate.
     *
     * @return string
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any additional notes to include on the estimate.
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

    /**
     * The currency used by the estimate. If not provided, the client’s currency will be used. See a list of supported currencies.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency used by the estimate. If not provided, the client’s currency will be used. See a list of supported currencies.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Date the estimate was issued.
     *
     * @return string
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * Date the estimate was issued.
     *
     * @param string $issueDate
     *
     * @return self
     */
    public function setIssueDate(?string $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Array of line item parameters.
     *
     * @return EstimatesEstimateIdPatchBodyLineItemsItem[]
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Array of line item parameters.
     *
     * @param EstimatesEstimateIdPatchBodyLineItemsItem[] $lineItems
     *
     * @return self
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
