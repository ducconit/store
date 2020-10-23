<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'name'=>'HELLO_SUMMER',
            'value'=>20
        ]);
        Ticket::create([
            'name'=>'BEST_SELLER',
            'type'=>'number',
            'value'=>100
        ]);
//        Ticket::factory(9)->create();
    }
}
