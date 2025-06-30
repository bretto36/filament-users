<?php

namespace TomatoPHP\FilamentUsers\Filament\Resources\Users\Schemas\Entries;

use Filament\Infolists;

class Verified extends Entry
{
    public static function make(): Infolists\Components\TextEntry
    {
        return Infolists\Components\TextEntry::make('email_verified_at')
            ->visible(fn ($record) => $record->email_verified_at)
            ->label(trans('filament-users::user.resource.email_verified_at'));
    }
}
