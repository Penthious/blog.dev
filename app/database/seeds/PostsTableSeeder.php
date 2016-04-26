<?php


class PostsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('posts')->delete();

            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();


            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();

            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();
            
            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();

            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();

            $post = new Post();
            $post->title = 'Day 1, Week 1';
            $post->body  =  "The first day of codeup and at the moment I am very confident and really excited about the experience to be here. So far we all we have accomplished today was setting up our computers to be able to run the VM that they chose. I have stayed after class as one, I want to learn as much as I can in my time at Codeup and two, they are having a web dev meet up at 6:30pm and I want to stay around as I really think it'll be good for me to interact with other developers that way when I finish Codeup I will have a great network of people that I will be able to rely on.";
            $post->user_id = User::first()->id;
            $post->created_at = '2016-01-19';
            $post->save();

            $post = new Post();
            $post->title = 'My first offical blog on my new site.';
            $post->body  =  "Hello all, so I just finished building my blog, I have said since day one that this is what I wanted to do, I am extremely proud of myself. I have come so far since the start of codeup. When I first started i knew very little html and css, I can now build a whole site on my own. I understand that I am far from great but one day I will be outstanding as I have a great passion for what I do and what I build. My skills are constantly improving and my next goal for this site is to make it fully responsive by building custom sass for it. See you again in the next blog.";
            $post->user_id = User::first()->id;
            $post->save();
    }

}
?>
