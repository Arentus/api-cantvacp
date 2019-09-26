<?php

use Illuminate\Database\Seeder;
use App\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = Type::create(
            [
            	'user_Id' => 1,
                'code' => 'XX123',
                'name' => 'CANTV'
            ]
        );
    }
}
