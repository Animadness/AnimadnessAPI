<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post as Post;
use App\Anime as Anime;

class WordpressCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wordpress:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the Wordpress CRON and approve any scheduled anime';

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
    public function handle(Post $post, Anime $anime)
    {
        $post->publishMissed();
        $anime->approveScheduled();
    }
}
