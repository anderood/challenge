<?php

namespace App\Console\Commands;

use App\Models\Donator;
use App\Models\DonatorCount;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DonatorsAmount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:donation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register the donation';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $date = Carbon::yesterday();

        $debitCount = Donator::where('payment_method', 'Debito')->where('created_at', $date)->count();
        $creditCount = Donator::where('payment_method', 'Credito')->where('created_at', $date)->count();

        DonatorCount::create([
            'date' => $date,
            'debit_count' => $debitCount,
            'credit_count' => $creditCount,
        ]);
        
        $this->info('Contagem Registrada!');
    }
}
