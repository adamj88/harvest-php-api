<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class TimeEntries
{
    /**
     * @var TimeEntry[]
     */
    protected $timeentries;
    /**
     * @var int
     */
    protected $perPage;
    /**
     * @var int
     */
    protected $totalPages;
    /**
     * @var int
     */
    protected $totalEntries;
    /**
     * @var int
     */
    protected $nextPage;
    /**
     * @var int
     */
    protected $previousPage;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var PaginationLinks
     */
    protected $links;

    /**
     * @return TimeEntry[]
     */
    public function getTimeentries(): ?array
    {
        return $this->timeentries;
    }

    /**
     * @param TimeEntry[] $timeentries
     *
     * @return self
     */
    public function setTimeentries(?array $timeentries): self
    {
        $this->timeentries = $timeentries;

        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(?int $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalEntries(): ?int
    {
        return $this->totalEntries;
    }

    /**
     * @param int $totalEntries
     *
     * @return self
     */
    public function setTotalEntries(?int $totalEntries): self
    {
        $this->totalEntries = $totalEntries;

        return $this;
    }

    /**
     * @return int
     */
    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    /**
     * @param int $nextPage
     *
     * @return self
     */
    public function setNextPage(?int $nextPage): self
    {
        $this->nextPage = $nextPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreviousPage(): ?int
    {
        return $this->previousPage;
    }

    /**
     * @param int $previousPage
     *
     * @return self
     */
    public function setPreviousPage(?int $previousPage): self
    {
        $this->previousPage = $previousPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return PaginationLinks
     */
    public function getLinks(): ?PaginationLinks
    {
        return $this->links;
    }

    /**
     * @param PaginationLinks $links
     *
     * @return self
     */
    public function setLinks(?PaginationLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
