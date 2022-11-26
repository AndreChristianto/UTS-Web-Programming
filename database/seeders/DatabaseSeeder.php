<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           'id'=>1,
           'name'=>'Action'
        ]);

        DB::table('categories')->insert([
            'id'=>2,
            'name'=>'Fantasy'
        ]);

        DB::table('categories')->insert([
            'id'=>3,
            'name'=>'Mystery'
        ]);

        DB::table('categories')->insert([
            'id'=>4,
            'name'=>'Romance'
        ]);

        DB::table('publishers')->insert([
            'id'=>1,
            'name'=>'Harper Collins',
            'address'=>'3665 Sycamore Road',
            'phone'=>'08163323417',
            'email'=>'harper@gmail.com',
            'image'=>'harper.jpg'
        ]);

        DB::table('publishers')->insert([
            'id'=>2,
            'name'=>'Macmillan Publishers',
            'address'=>'1842 Reeves Street',
            'phone'=>'09208890908',
            'email'=>'macmillan@gmail.com',
            'image'=>'macmillan.jpg'
        ]);

        DB::table('publishers')->insert([
            'id'=>3,
            'name'=>'Penguin Random House',
            'address'=>'3632 Bicetown Road',
            'phone'=>'09174133090',
            'email'=>'penguin@gmail.com',
            'image'=>'penguin.jpg'
        ]);

        DB::table('books')->insert([
            'id'=>1,
            'publisher_id'=>1,
            'title'=>'The Authors POV',
            'author'=>'Entrail_JI',
            'year'=>2021,
            'synopsis'=>'The person whom the world revolves around. The person who defeats all of his opponents, and ultimately gets the beautiful girl. The sole existence all villains fear.',
            'image'=>'AuthorPOV.jpg'
        ]);

        DB::table('books')->insert([
            'id'=>2,
            'publisher_id'=>1,
            'title'=>'Case Closed',
            'author'=>'Gosho Aoyama',
            'year'=>1994,
            'synopsis'=>'Hot on the trail of a suspect, Jimmy is accosted from behind and fed a strange chemical which physically transforms him into a grade schooler! Taking on the pseudonym Conan Edogawa, he attempts to track down the people who did this to him.',
            'image'=>'Conan.jpg'
        ]);

        DB::table('books')->insert([
            'id'=>3,
            'publisher_id'=>1,
            'title'=>'Horimiya',
            'author'=>'HERO',
            'year'=>2012,
            'synopsis'=>'At school, Kyouko Hori is known for being smart, attractive, and popular. While, her classmate, the boring, gloomy Izumi Miyamura tends to get painted as a "loser fanboy.", these two teenagers discover that there are multiple sides to every story.',
            'image'=>'Horimiya.webp'
        ]);

        DB::table('books')->insert([
            'id'=>4,
            'publisher_id'=>2,
            'title'=>'Lord of the Mysteries',
            'author'=>'Cuttlefish That Loves Diving',
            'year'=>2018,
            'synopsis'=>'Waking up to be faced with a string of mysteries, Zhou Mingrui finds himself reincarnated as Klein Moretti in an alternate Victorian era world where he sees a world filled with machinery, cannons, dreadnoughts, airships, difference machines, and more',
            'image'=>'LOTM.jpeg'
        ]);

        DB::table('books')->insert([
            'id'=>5,
            'publisher_id'=>2,
            'title'=>'Moriarty the Patriot',
            'author'=>'Arthur Conan Doyle',
            'year'=>2016,
            'synopsis'=>'Great Britain has become the greatest empire the world has ever known. Hidden within its success, the nations rigid economic hierarchy dictates the value of ones life solely on status and wealth.',
            'image'=>'Moriarty.webp'
        ]);

        DB::table('books')->insert([
            'id'=>6,
            'publisher_id'=>2,
            'title'=>'Omniscient Readers POV',
            'author'=>'싱숑',
            'year'=>2018,
            'synopsis'=>'Kim Dokja does not consider himself the protagonist of his own life. Befitting the name his parents gave him, he is a solitary person whose sole hobby is reading web novels.',
            'image'=>'Omniscient.webp'
        ]);

        DB::table('books')->insert([
            'id'=>7,
            'publisher_id'=>3,
            'title'=>'How a Realist Hero Rebuilt the Kingdom',
            'author'=>'Dojyomaru',
            'year'=>2016,
            'synopsis'=>'Kazuya Souma found himself summoned to another world. After he presents his plan to strengthen the country economically and militarily, the king cedes the throne to him and Souma finds himself saddled with ruling the nation!',
            'image'=>'Realist.webp'
        ]);

        DB::table('books')->insert([
            'id'=>8,
            'publisher_id'=>3,
            'title'=>'Spy X Family',
            'author'=>'Tatsuya Endo',
            'year'=>2020,
            'synopsis'=>'A spy known only as Twilight needs a family as part of his undercover mission, so he quickly marries a city hall worker and adopts a child and dog. Unknown to him, his family has secrets of their own.',
            'image'=>'SpyXFamily.jpg'
        ]);

        DB::table('books')->insert([
            'id'=>9,
            'publisher_id'=>3,
            'title'=>'I am the Villainess, So I am Taming the Final Boss',
            'author'=>'Sarasa Nagase',
            'year'=>2017,
            'synopsis'=>'Aileen gains vague recollections about her past life under shock and humiliation. Aileen adeptly pieces her fragmented memories together and quickly realizes she had reincarnated as the villainess of an otome game she once played in her past life.',
            'image'=>'TameBoss.webp'
        ]);

        DB::table('book_categories')->insert([
            'id'=>1,
            'book_id'=>1,
            'category_id'=>1
        ]);

        DB::table('book_categories')->insert([
            'id'=>2,
            'book_id'=>1,
            'category_id'=>2
        ]);

        DB::table('book_categories')->insert([
            'id'=>3,
            'book_id'=>1,
            'category_id'=>3
        ]);

        DB::table('book_categories')->insert([
            'id'=>4,
            'book_id'=>1,
            'category_id'=>4
        ]);

        DB::table('book_categories')->insert([
            'id'=>5,
            'book_id'=>2,
            'category_id'=>3
        ]);

        DB::table('book_categories')->insert([
            'id'=>6,
            'book_id'=>3,
            'category_id'=>4
        ]);

        DB::table('book_categories')->insert([
            'id'=>7,
            'book_id'=>4,
            'category_id'=>2
        ]);

        DB::table('book_categories')->insert([
            'id'=>8,
            'book_id'=>4,
            'category_id'=>3
        ]);

        DB::table('book_categories')->insert([
            'id'=>9,
            'book_id'=>5,
            'category_id'=>1
        ]);

        DB::table('book_categories')->insert([
            'id'=>10,
            'book_id'=>5,
            'category_id'=>3
        ]);

        DB::table('book_categories')->insert([
            'id'=>11,
            'book_id'=>6,
            'category_id'=>1
        ]);

        DB::table('book_categories')->insert([
            'id'=>12,
            'book_id'=>6,
            'category_id'=>2
        ]);

        DB::table('book_categories')->insert([
            'id'=>13,
            'book_id'=>7,
            'category_id'=>2
        ]);

        DB::table('book_categories')->insert([
            'id'=>14,
            'book_id'=>7,
            'category_id'=>4
        ]);

        DB::table('book_categories')->insert([
            'id'=>15,
            'book_id'=>8,
            'category_id'=>1
        ]);

        DB::table('book_categories')->insert([
            'id'=>16,
            'book_id'=>9,
            'category_id'=>4
        ]);
    }
}
