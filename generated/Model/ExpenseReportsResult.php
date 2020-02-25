<?php

namespace JoliCode\Harvest\Api\Model;

class ExpenseReportsResult
{
    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @var int|null
     */
    protected $expenseCategoryId;
    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @var string|null
     */
    protected $expenseCategoryName;
    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var string|null
     */
    protected $userName;
    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var bool|null
     */
    protected $isContractor;
    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @var float|null
     */
    protected $totalAmount;
    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @var float|null
     */
    protected $billableAmount;
    /**
     * The currency code associated with the expenses for this result.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @param int|null $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @return string|null
     */
    public function getClientName() : ?string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @param string|null $clientName
     *
     * @return self
     */
    public function setClientName(?string $clientName) : self
    {
        $this->clientName = $clientName;
        return $this;
    }
    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @return string|null
     */
    public function getProjectName() : ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @return int|null
     */
    public function getExpenseCategoryId() : ?int
    {
        return $this->expenseCategoryId;
    }
    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @param int|null $expenseCategoryId
     *
     * @return self
     */
    public function setExpenseCategoryId(?int $expenseCategoryId) : self
    {
        $this->expenseCategoryId = $expenseCategoryId;
        return $this;
    }
    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @return string|null
     */
    public function getExpenseCategoryName() : ?string
    {
        return $this->expenseCategoryName;
    }
    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @param string|null $expenseCategoryName
     *
     * @return self
     */
    public function setExpenseCategoryName(?string $expenseCategoryName) : self
    {
        $this->expenseCategoryName = $expenseCategoryName;
        return $this;
    }
    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @return string|null
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }
    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @return bool|null
     */
    public function getIsContractor() : ?bool
    {
        return $this->isContractor;
    }
    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @param bool|null $isContractor
     *
     * @return self
     */
    public function setIsContractor(?bool $isContractor) : self
    {
        $this->isContractor = $isContractor;
        return $this;
    }
    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @return float|null
     */
    public function getTotalAmount() : ?float
    {
        return $this->totalAmount;
    }
    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @param float|null $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?float $totalAmount) : self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @return float|null
     */
    public function getBillableAmount() : ?float
    {
        return $this->billableAmount;
    }
    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @param float|null $billableAmount
     *
     * @return self
     */
    public function setBillableAmount(?float $billableAmount) : self
    {
        $this->billableAmount = $billableAmount;
        return $this;
    }
    /**
     * The currency code associated with the expenses for this result.
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with the expenses for this result.
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}