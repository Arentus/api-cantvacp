<?php

use Illuminate\Database\Seeder;
use App\Control;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $control = Control::create(
            [
            	'user_Id' => 2,
                'name' => 'Cantv'
            ]
        );

        $control = Control::create(
            [
                'user_Id' => 2,
                'name' => 'Movilnet'
            ]
        );
        
        $control = Control::create(
            [
                'user_Id' => 2,
                'name' => 'Movistar'
            ]
        );
    }
}
