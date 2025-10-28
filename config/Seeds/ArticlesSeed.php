<?php

declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'title' => 'First Article',
                'slug' => 'first-article',
                'body' => 'This is the body of the first article.',
                'published' => true,
                'created' => '2024-10-27 12:00:00',
                'modified' => '2024-10-27 12:00:00',
            ],
            [
                'user_id' => 2,
                'title' => 'Second Article',
                'slug' => 'second-article',
                'body' => 'This is the body of the second article.',
                'published' => false,
                'created' => '2024-10-27 13:00:00',
                'modified' => '2024-10-27 13:00:00',
            ],
            [
                'user_id' => 1,
                'title' => 'Third Article',
                'slug' => 'third-article',
                'body' => 'This is the body of the third article.',
                'published' => true,
                'created' => '2024-10-27 14:00:00',
                'modified' => '2024-10-27 14:00:00',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
