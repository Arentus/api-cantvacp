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
            	'user_Id' => 2,
                'code' => 'OGk6YqLISq',
                'name' => 'Cantv'
            ]
        );

        $type = Type::create(
            [
                'user_Id' => 2,
                'code' => '666kkkiill',
                'name' => 'Movilnet'
            ]
        );
        $type = Type::create(
            [
                'user_Id' => 3,
                'code' => 'KKILLLOXXXX',
                'name' => 'Movistar'
            ]
        );
    }
}
