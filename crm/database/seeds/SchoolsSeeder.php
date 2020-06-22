<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $school = [
        [
          'name'      => 'Instituto Martí Dot',
          'address'   => 'Calle falsa 123',
          'img_name'  => 'inst1.jpg',
          'email'     => 'ies@martidot.edu',
          'phone'     => '699999999',
          'web_link' => 'martidot.com',
        ],
        [
          'name'      => 'Escola Montserrat',
          'address'   => 'Calle falsa 456',
          'img_name'  => 'cole1.jpg',
          'email'     => 'ies@montserrat.edu',
          'phone'     => '799999999',
          'web_link' => 'montserrat.com',
        ],
        [
          'name'      => 'Escola Joan Miró',
          'address'   => 'Calle falsa 789',
          'img_name'  => 'cole2.jpg',
          'email'     => 'ies@miro.edu',
          'phone'     => '699999998',
          'web_link' => 'miro.com',
        ],
      ];

      foreach ($school as $key => $value) {
        School::create($value);
      }
    }
}
