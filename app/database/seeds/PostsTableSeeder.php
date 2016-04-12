<?php
class PostsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        User::create(array(
            'title'      => 'This is a test blog.',
            'body'   => 'This is a test body'
        ));

    }

}
?>
