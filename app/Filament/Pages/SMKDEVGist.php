<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Illuminate\Contracts\View\View;
// use App\Models\Gist;

class SMKDEVGist extends Page
{
    protected static ?string $slug = 'tools/smkdev-gist';
    protected static string $view = 'filament.pages.smkdev-gist';
    protected static ?string $title = 'SMKDEV Gist';
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';
    protected static ?string $navigationGroup = 'Tools';

    public $gist_title;
    public $content;
    public $visibility = 'public';

    public function mount()
    {
        // Initialize default values for form inputs
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label('Gist Title')
                ->required(),
            Textarea::make('content')
                ->label('Gist Content')
                ->required()
                ->rows(10),
            Select::make('visibility')
                ->label('Visibility')
                ->options([
                    'public' => 'Public',
                    'private' => 'Private',
                ])
                ->default('public'),
        ];
    }

    public function submitForm()
    {
        Gist::create([
            'title' => $this->gist_title,
            'content' => $this->content,
            'visibility' => $this->visibility,
        ]);

        $this->notify('success', 'Gist created successfully!');
    }

    public function render(): View
    {
        return view('filament.pages.smkdev-gist');
    }
}
