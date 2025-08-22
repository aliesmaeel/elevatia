<?php

namespace App\Filament\Resources\EmailResource\Actions;

use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class MarkAsRead extends Action
{
    /**
     * The action that gets triggered.
     */
    public function handle(Model $record): void
    {
        // Update the 'is_read' field to true (1) when the action is triggered
        $record->update(['is_read' => 1]);

        // Optionally, you could flash a message to indicate the update
        session()->flash('success', 'Email marked as read.');
    }
}

