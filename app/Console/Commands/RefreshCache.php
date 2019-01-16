<?php

namespace App\Console\Commands;

use App\Unit;
use App\Theme;
use App\FileType;
use App\DataFormat;
use App\ResponseFormat;
use Illuminate\Console\Command;

class RefreshCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:constants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch and set every constant in app cache';

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
        DataFormat::refreshCache();
        FileType::refreshCache();
        ResponseFormat::refreshCache();
        Theme::refreshCache();
        Unit::refreshCache();
        UserType::refreshCache();
    }
}
