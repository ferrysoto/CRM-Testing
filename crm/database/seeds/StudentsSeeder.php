<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $student = [
        [
          'name'       => 'Ferran Herrero Soto',
          'address'    => 'Ejemplo de calle 1',
          'school_id'  => 1,
          'born_date'  => '1998-06-18',
          'born_city'  => 'Barcelona',
        ],
        [
          'name'       => 'David Rodríguez Moreno',
          'address'    => 'Ejemplo de calle 2',
          'school_id'  => 2,
          'born_date'  => '2020-06-22',
          'born_city'  => 'Tarragona',
        ],
        [
          'name'       => 'Laravel 7.5',
          'address'    => 'Ejemplo de calle 3',
          'school_id'  => 3,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Valencia',
        ],
      ];

      foreach ($student as $key => $value) {
        Student::create($value);
      }
    }
}
