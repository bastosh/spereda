<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;

class ServicesTest extends TestCase
{

    public function testArchives()
    {

        // Given I have two records in the database that are posts,
        // and each one is posted a month apart,

        // when I fetch the archives
        Post::archives();

        // the response should be in the proper format

    }

}