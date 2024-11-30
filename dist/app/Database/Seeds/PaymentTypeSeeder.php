<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class PaymentTypeSeeder extends Seeder
{
    public function run()
    {
      $pt = model('PaymentTypeModel');
        $pt->insertBatch([
            [
                'types_name'        => 'Credit Card',
                'types_description' => 'success',
            ],
            [
                'types_name'        => 'PayPal',
                'types_description' => 'primary',
            ],
            [
                'types_name'        => 'Venmo',
                'types_description' => 'primary',
            ],
            [
                'types_name'        => 'Cash',
                'types_description' => 'danger',
            ],
            [
                'types_name'        => 'Wallet',
                'types_description' => 'warning',
            ],
        ]);
    }
}
