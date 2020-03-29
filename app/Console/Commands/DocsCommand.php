<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;

class DocsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Swagger json from yaml';


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
        $yml = Yaml::parseFile(base_path('docs/swagger-ui.yml'));
        $oldVersion = $yml['info']['version'];
        $newVersion = exec('git rev-parse --short HEAD');
        $yml['info']['version'] = $newVersion;

        $oldPath = base_path('docs/swagger-ui.'.$oldVersion.'.json');
        if(File::exists(base_path('docs/swagger-ui.'.$oldVersion.'.json'))) {
            unlink($oldPath);
            $this->info($oldPath . ' is removed !');
        }

        file_put_contents(base_path('docs/swagger-ui.'.$newVersion.'.json'), json_encode($yml));
        $this->info('New file :'. $newVersion . ' is updated');
    }
}