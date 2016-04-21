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
            $post->body  =  "Went over a lot more of html today, I will post the code I wrote at the bottom of this page that way I can see how far I came when I look back at this and see how far I came and enjoy the struggle that I am going through to  learn how to code. Back to what I was saying, I am not a great blogger yesterdays blog was my very first but through out the months we will see (hopefully) that my skills of blogging increase. Now I did stay after class again today this will most likely be a everyday occurence for me and in every blog I will say if I stayed after class or if I left with everyone else.  I also went to a javascript meet up at geekdom at 700, that was another great meeting.

Code:
 <!DOCTYPE html>
<html>
 <head>
  <meta charset=\"utf-8\">
  <title>
  </title>
 </head>
 <body>
  <a id=\"top\"></a>
  <h2>Hello I am going to go over a few things we learned today.</h2>
  <hr>
  <p> We went over <strong>quite</strong> a bit <em>today</em><br> we went over</p>
  <ol>
   <li>html basics</li>
    <ul>
     <li>Learned p</li>
     <li>Learned h1-h6</li>
     <li>Learned a href</li>
     <li>Learned a id</li>
    </ul>
    <li>Lists</li>
     <ul>
      <li>Learned ol</li>
        <dl>
         <dt><h2>ol</h2></dt>
         <dd>Gives you lists in bulletin form</dd>
        </dl>
      <li>Learned li which gives numbered lists</li>
       <dl>
        <dt><h2>li</h2></dt>
        <dd>Gives you lists in numbered form</dd>
       </dl>
      <li>Learned dd</li>
       <dl>
        <dt><h2>dd</h2></dl>
        <dd>Gives you a list with terms and the definitions of them</dd>
       </dl>
     </ul>
   <li>Tables</li>
    <ul>
     <li>Learned how to make a table</li>
    </ul>
      <table>
       <tr>
        <th>first row first column</th>
        <th>first row second column</th>
       </tr>
       <tr>
        <td>second row first column</td>
        <td>second row second column</td>
       </tr>
       </table>
       <li>images</li>
        <ul>
         <li>Learned how to add images to our code by adding a href</li>
          <img src=\"/img/download.jpeg\">
         <li> we can also have you click a img to take you to a site like so</li>
          <a href=\"http://google.com\"> <img src=\"/img/download.jpeg\">  </a>
         <li>We can also click a word to take you to that site like <a href=\"http://google.com\">this text!</a></li>
        </ul>
  </ol>
  <a href=\"#top\">Take me to the top</a>
 </body>
</html>";
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
