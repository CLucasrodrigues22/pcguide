<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
{
    // https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
    public function change(): void
    {
        // create the table
        $table = $this->table('users', ['id' => 'user_id']);
        $table->addColumn('name', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('password', 'string', ['limit' => 200, 'null' => false])
            ->addColumn('phone', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('photo', 'string', ['limit' => 200, 'null' => true])
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
