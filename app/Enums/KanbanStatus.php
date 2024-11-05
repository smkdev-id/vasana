<?php

namespace App\Enums;

enum KanbanStatus: string
{
    case TODO = 'todo';
    case IN_PROGRESS = 'in_progress';
    case REVIEW = 'review';
    case DONE = 'done';

    /**
     * Get the label for display in Filament forms or tables.
     */
    public function label(): string
    {
        return match ($this) {
            self::TODO => 'To Do',
            self::IN_PROGRESS => 'In Progress',
            self::REVIEW => 'Review',
            self::DONE => 'Done',
        };
    }
}
