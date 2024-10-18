<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Spatie\Image\Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Contracts\View\View;

class SVGConverter extends Page
{
    // Page settings
    protected static ?string $slug = 'tools/svg-converter';
    protected static string $view = 'filament.pages.svg-converter';
    protected static ?string $title = 'SVG Converter';
    protected static ?string $navigationIcon = 'heroicon-m-cube-transparent';
    protected static ?string $navigationGroup = 'Tools';

    // Form state (for the file upload)
    public $svg_file;

    // Define form schema
    protected function getFormSchema(): array
    {
        return [
            FileUpload::make('svg_file')
                ->label('Upload SVG File')
                ->acceptedFileTypes(['image/svg+xml'])
                ->required()
                ->disk('public'), // Ensure it is stored in the public disk or configured disk
        ];
    }

    // Action for form submission and SVG conversion
    public function convert()
    {
        // Validate the SVG file
        $validatedData = $this->form->getState();
        $file = $validatedData['svg_file'];

        if ($file) {
            // Get the file path
            $filePath = storage_path('app/public/' . $file);

            // Output file path
            $outputPath = storage_path('app/public/converted-image.png');

            // Convert the SVG to PNG
            Image::load($filePath)
                ->format('png')
                ->save($outputPath);

            // Optionally optimize the image
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($outputPath);

            // Notify user about the successful conversion
            $this->notify('success', 'SVG file successfully converted to PNG.');

            // Return a download link
            return response()->download($outputPath);
        } else {
            $this->notify('danger', 'Please upload an SVG file.');
        }
    }

    // Form submit action
    public function submitForm()
    {
        $this->convert();  // Call the convert method
    }

    // Properly declare the render method with the correct return type
    public function render(): View
    {
        return view('filament.pages.svg-converter');
    }
}