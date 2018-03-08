<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	$centuries = [   'XVII a. I-as ketv.',
                       'XVII a. II-as ketv. ',
                       'XVII a. III-as ketv. ',
                       'XVII a. IV-as ketv. ',
					             'XVIII a. I-as ketv.',
                       'XVIII a. II-as ketv. ',
                       'XVIII a. III-as ketv. ',
                       'XVIII a. IV-as ketv. ',
                       'XIX a. I-as ketv.',
                       'XIX a. II-as ketv. ',
                       'XIX a. III-as ketv. ',
                       'XIX a. IV-as ketv. ',
                       'XX a. I-as ketv.',
                       'XX a. II-as ketv. ',
                       'XX a. III-as ketv. ',
                       'XX a. IV-as ketv. ',
                       'XXI a.'
		];


		foreach ($centuries as $century) {
			  DB::table('centuries')->insert([
		            'centuries' => $century
		        ]);
		}
      

      $regions = [
      'Vilniaus apskritis',
      'Kauno apskritis',
      'Klaipėdos apskritis',
      'Šiaulių apskritis',
      'Panevėžio apskritis',
      'Alytaus apskritis',
      'Marijampolės apskritis',
      'Utenos apskritis',
      'Telšių apskritis',
      'Tauragės apskritis',
      ];

    foreach ($regions as $region) {
        DB::table('regions')->insert([
                'regions' => $region
            ]);
    }


    }
}
