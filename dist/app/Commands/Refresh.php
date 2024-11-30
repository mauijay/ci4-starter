<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use Config\Database;
use CodeIgniter\CLI\CLI;

class Refresh extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Development';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'starter:refresh';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'db refresh to migrate and seed basic web data';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'starter:refresh [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
      try {
        $this->call('migrate:refresh', $params);
        $seeder = Database::seeder();
        $seeder->call('BaseSeeder');
        $seeder->call('BlogSeeder');
      } catch (\Exception $e) {
        $this->showError($e);
      }
    }
}
