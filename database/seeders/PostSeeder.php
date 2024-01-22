<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => null,
            'title' => "Testing Default Models Post",
            'slug' => 'testing-default-models-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minima vel placeat facere natus debitis.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In inventore recusandae eum, illo vel facere voluptatem non architecto ut beatae culpa aliquam eos suscipit voluptate nemo esse hic dolores. Dignissimos vitae nisi qui, nemo tempora provident mollitia! Ratione voluptas tempora quasi iusto sapiente nihil deleniti at sed qui tenetur earum laboriosam dolor tempore, adipisci nam consequuntur amet excepturi blanditiis veritatis cum debitis, hic neque impedit dicta? Sunt quae placeat atque est, molestiae totam architecto dicta distinctio vitae quia? Doloribus aut consequuntur, rerum nesciunt ad earum saepe minus exercitationem commodi nemo, quae dolores temporibus? Dolor similique ab excepturi voluptates corrupti quo.'
        ]);

        Post::factory(20)->create();
    }
}
