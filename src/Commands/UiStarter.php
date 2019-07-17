<?php

namespace Cdz\Ui\Commands;

use Illuminate\Console\Command;

class UiStarter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui:starter {file=starter}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Ui Starter Template';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (file_exists($view = resource_path('views/'.$this->argument('file').'.blade.php'))) {
            $this->error('The view already exists');
            return ;
        }

        if (! copy( __DIR__.'/stubs/starter/views/starter.stub', $view)) {
            $this->error('Error while creating view');
            return ;
        }

        $this->info('View has been created!');
    }
}
