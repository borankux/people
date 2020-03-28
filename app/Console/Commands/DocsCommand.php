<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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


    protected $versionFilePath;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->versionFilePath = base_path('docs/version');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $docsPath = base_path('docs/swagger-ui.yml');
        $jsonPath = base_path('docs/swagger-ui.'.$this->getVersion(false).'.json');
        $result = $yml = Yaml::parseFile($docsPath);
        $json = json_encode($result);
        file_put_contents($jsonPath, $json);
        $this->info('Swagger document is updated with: '.$this->getVersion(false).'!');
    }

    public function getVersion($old = true)
    {
        $version = $old ? file_get_contents($this->versionFilePath) : exec(' git rev-parse --short HEAD');
        return trim($version);
    }

    public function setVersion()
    {
        $version = exec('git rev-parse --short HEAD');
        file_put_contents($this->versionFilePath, $version);
    }
}
