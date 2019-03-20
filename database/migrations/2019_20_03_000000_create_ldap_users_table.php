public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');

        // remove this line:
        // $table->string('email')->unique();
        // and replace it with this one:
        $table->string('username')->unique();

        // remove this line as well:
        // $table->timestamp('email_verified_at')->nullable();

        // add this line:
        $table->string('phone');

        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
}
