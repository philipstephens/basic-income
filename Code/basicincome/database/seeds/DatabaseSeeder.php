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
        // $this->call(UsersTableSeeder::class);

        $username = Config::get('database.connections.mysql.username');
        $password = Config::get('database.connections.mysql.password');
        $database = Config::get('database.connections.mysql.database');

    	$script1 = getcwd().'/database/seeds/continents.sql';
        $command = "mysql -u $username -p$password $database < $script1";
        exec($command);

        $script2 = getcwd().'/database/seeds/countries.sql'; 
        $command = "mysql -u $username -p$password $database < $script2";
        exec($command);

        $script3 = getcwd().'/database/seeds/gdp_records.sql';
        $command = "mysql -u $username -p$password $database < $script2";
        
    	exec($command);
    }
}
