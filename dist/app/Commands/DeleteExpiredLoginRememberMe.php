<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use App\Models\RememberedLoginModel;
use CodeIgniter\CLI\CLI;

class DeleteExpiredLoginRememberMe extends BaseCommand
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
    protected $name = 'auth:cleanup';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Clears expired remembered login records.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'auth:cleanup';

    /**
     * Execute an auth clean up command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
      $model = new RememberedLoginModel;
        
      $rows = $model->deleteExpired();
      
      echo "$rows rows deleted.\n";
    }
}
