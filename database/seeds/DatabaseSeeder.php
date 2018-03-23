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



    // --
      $abouts = [
      'ABOUT Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ];


    foreach ($abouts as $about) {
        DB::table('abouts')->insert([
                'text' => $about
            ]);
    }
    // -- 

      $posts = [
      'POST 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 

      'POST 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

      'POST 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

      'POST 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 
      ];


    foreach ($posts as $post) {
        DB::table('posts')->insert([
                'text' => $post,

            ]);
    }


    // -- 
          $links = [
      'Nuoroda 1',
      'Nuoroda 2',
      'Nuoroda 3',
      'Nuoroda 4',
      'Nuoroda 5',
      'Nuoroda 6',
      'Nuoroda 7',
      'Nuoroda 8',
      'Nuoroda 9',
      'Nuoroda 10',
      'Nuoroda 11',
      'Nuoroda 12',
      ];



    foreach ($links as $link) {
        DB::table('links')->insert([
                'text' => $link,
                'url' => 'http://www.sietynupaveldas.lt/temp'
            ]);
    }

    // -- 

        $articles = [
      'Straipsnis 1',
      'Straipsnis 2',
      'Straipsnis 3',
      'Straipsnis 4',
      'Straipsnis 5',
      'Straipsnis 6',
      'Straipsnis 7',
      'Straipsnis 8',
      'Straipsnis 9',
      'Straipsnis 10',
      'Straipsnis 11',
      'Straipsnis 12',
      ];



    foreach ($articles as $article) {
        DB::table('links')->insert([
                'text' => $article,
                'url' => 'http://www.sietynupaveldas.lt/temp'
            ]);
    }















    }
}
