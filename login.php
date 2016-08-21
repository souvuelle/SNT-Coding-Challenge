/*
Encryption Key
*/
 
'key' => md5,

'connections' => array(
 
    'mysql' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'Laravel_Dev',
        'username'  => 'your_username',
        'password'  => 'your_password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ),
),

	
$ php artisan migrate:make create_users_table --table=users --create
$ php artisan migrate:make create_urls_table --table=urls --create

public function up()
{
    Schema::create('users', function(Blueprint $table)
    {
        $table->increments('id');
        $table->string('username')->unique();
        $table->string('password');
        $table->timestamps();
    });
}

public function up()
{
    Schema::create('urls', function(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('url');
        $table->string('description');
        $table->timestamps();
    });
}

<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'firstuser',
            'password' => Hash::make('first_password')
        ));
 
        User::create(array(
            'username' => 'seconduser',
            'password' => Hash::make('second_password')
        ));
    }
 
}

public function run()
{
    Eloquent::unguard();
 
    // Add or Uncomment this line
    $this->call('UserTableSeeder');
}

// Create the two tables
$ php artisan migrate
 
// Create the sample users
$ php artisan db:seed

<?php
 
class Url extends Eloquent {
 
    protected $table = 'urls';
 
}

Route::filter('auth.basic', function()
{
    return Auth::basic();
});

Route::filter('auth.basic', function()
{
    return Auth::basic("username");
});
