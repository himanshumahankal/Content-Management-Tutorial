<?php

declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Users seed.
 */
class UsersSeed extends BaseSeed
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
                'email' => 'himanshu@gmail.com',
                'password' => password_hash('password123', PASSWORD_DEFAULT),
                'created' => '2024-10-27 10:00:00',
                'modified' => '2024-10-27 10:00:00',
            ],
            [
                'email' => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'created' => '2024-10-27 11:00:00',
                'modified' => '2024-10-27 11:00:00',
            ],
            [
                'email' => 'user1@example.com',
                'password' => password_hash('user1234', PASSWORD_DEFAULT),
                'created' => '2024-10-27 12:00:00',
                'modified' => '2024-10-27 12:00:00',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
