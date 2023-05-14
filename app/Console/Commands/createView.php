<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class createView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command is used to create views';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $filePath = resource_path('views/' . $name . '.blade.php');

        if(!$filePath) {
            $this->error('this file already exists !!');
            return;
        }

    $content = '<!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
    </head>
    <body>

    <h1>welcome</h1>

    </body>
    </html>';

        file_put_contents($filePath, $content);

        $this->info('the view was created succesfully !!');
    }
}
