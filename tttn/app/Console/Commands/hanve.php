<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Carbon\Carbon;

class hanve extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:hanve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Thay doi trang thai ve va lich chieu';

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
     * @return int
     */
    public function handle()
    {
        $hanve=Carbon::parse(Carbon::now('Asia/Ho_Chi_Minh'))->format('Y-m-d H:i:s');
            DB::table('tbl_ve')->where('hanve','<',$hanve)->update(['statusVe'=>0]);
            DB::table('tbl_lichchieu')->where('giochieu','<',$hanve)->update(['statusLC'=>0]);
            return 0;
    }
}
