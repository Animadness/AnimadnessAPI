<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Anime as Anime;

class AnimeApprove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'anime:approve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Approve scheduled to release anime';

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
        $anime->approveScheduled();
    }
}
