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
          'name'       => 'Jaime',
          'address'    => 'Ejemplo de calle 3',
          'school_id'  => 3,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Valencia',
        ],
        [
          'name'       => 'Lorena',
          'address'    => 'Ejemplo de calle 3',
          'school_id'  => 1,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Madrid',
        ],
        [
          'name'       => 'Silvia',
          'address'    => 'Ejemplo de calle 3',
          'school_id'  => 1,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Córdoba',
        ],
        [
          'name'       => 'Amelia',
          'address'    => 'Ejemplo de calle 5',
          'school_id'  => 3,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Tarragona',
        ],
        [
          'name'       => 'Adrián',
          'address'    => 'Ejemplo de calle test',
          'school_id'  => 2,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Zaragoza',
        ],
        [
          'name'       => 'Antonio',
          'address'    => 'Ejemplo de calle test 168468',
          'school_id'  => 2,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Barcelona',
        ],
        [
          'name'       => 'Mar',
          'address'    => 'Ejemplo de calle test',
          'school_id'  => 3,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Zaragoza',
        ],
        [
          'name'       => 'Alex',
          'address'    => 'Ejemplo de calle test',
          'school_id'  => 1,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Almusafes',
        ],
        [
          'name'       => 'Juliana',
          'address'    => 'Ejemplo de calle test',
          'school_id'  => 2,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Lérida',
        ],
        [
          'name'       => 'Guillermo',
          'address'    => 'Ejemplo de calle test',
          'school_id'  => 1,
          'born_date'  => '2020-09-21',
          'born_city'  => 'Terrassa',
        ],
      ];

      foreach ($student as $key => $value) {
        Student::create($value);
      }
    }
}
