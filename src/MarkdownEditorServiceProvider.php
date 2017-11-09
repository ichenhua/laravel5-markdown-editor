<?php namespace Chenhua\MarkdownEditor;

use Illuminate\Support\ServiceProvider;

class MarkdownEditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';

        $this->loadViewsFrom('resources/views/vendor/markdown', 'markdown');

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/markdown'),
            __DIR__.'/views' => base_path('resources/views/vendor/markdown'),
            __DIR__.'/config/markdowneditor.php' => base_path('config/markdowneditor.php'),
        ], 'markdown');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("markdown-editor", function(){
            return new MarkdownEditor();
        });
    }
}
