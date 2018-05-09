<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ServicesTest extends TestCase
{
    use DatabaseTransactions;

    public function testArchives()
    {

        // Given I have two records in the database that are posts,
        // and each one is posted a month apart,
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth()
        ]);

        // when I fetch the archives
        $posts = Post::archives();

        // the response should be in the proper format
        $this->assertCount(2, $posts);
    }
}