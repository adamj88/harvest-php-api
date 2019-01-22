<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesTimeEntryIdPatchBody
{
    /**
     * The ID of the project to associate with the time entry.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The ID of the task to associate with the time entry.
     *
     * @var int
     */
    protected $taskId;
    /**
     * The ISO 8601 formatted date the time entry was spent.
     *
     * @var string
     */
    protected $spentDate;
    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     *
     * @var string
     */
    protected $startedTime;
    /**
     * The time the entry ended.
     *
     * @var string
     */
    protected $endedTime;
    /**
     * The current amount of time tracked.
     *
     * @var float
     */
    protected $hours;
    /**
     * Any notes to be associated with the time entry.
     *
     * @var string
     */
    protected $notes;
    /**
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @var TimeEntriesTimeEntryIdPatchBodyExternalReference
     */
    protected $externalReference;

    /**
     * The ID of the project to associate with the time entry.
     *
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project to associate with the time entry.
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The ID of the task to associate with the time entry.
     *
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * The ID of the task to associate with the time entry.
     *
     * @param int $taskId
     *
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * The ISO 8601 formatted date the time entry was spent.
     *
     * @return string
     */
    public function getSpentDate(): ?string
    {
        return $this->spentDate;
    }

    /**
     * The ISO 8601 formatted date the time entry was spent.
     *
     * @param string $spentDate
     *
     * @return self
     */
    public function setSpentDate(?string $spentDate): self
    {
        $this->spentDate = $spentDate;

        return $this;
    }

    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     *
     * @return string
     */
    public function getStartedTime(): ?string
    {
        return $this->startedTime;
    }

    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     *
     * @param string $startedTime
     *
     * @return self
     */
    public function setStartedTime(?string $startedTime): self
    {
        $this->startedTime = $startedTime;

        return $this;
    }

    /**
     * The time the entry ended.
     *
     * @return string
     */
    public function getEndedTime(): ?string
    {
        return $this->endedTime;
    }

    /**
     * The time the entry ended.
     *
     * @param string $endedTime
     *
     * @return self
     */
    public function setEndedTime(?string $endedTime): self
    {
        $this->endedTime = $endedTime;

        return $this;
    }

    /**
     * The current amount of time tracked.
     *
     * @return float
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * The current amount of time tracked.
     *
     * @param float $hours
     *
     * @return self
     */
    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Any notes to be associated with the time entry.
     *
     * @return string
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any notes to be associated with the time entry.
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
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @return TimeEntriesTimeEntryIdPatchBodyExternalReference
     */
    public function getExternalReference(): ?TimeEntriesTimeEntryIdPatchBodyExternalReference
    {
        return $this->externalReference;
    }

    /**
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @param TimeEntriesTimeEntryIdPatchBodyExternalReference $externalReference
     *
     * @return self
     */
    public function setExternalReference(?TimeEntriesTimeEntryIdPatchBodyExternalReference $externalReference): self
    {
        $this->externalReference = $externalReference;

        return $this;
    }
}