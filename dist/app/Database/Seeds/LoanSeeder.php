<?php namespace App\Database\Seeds; // book loan data

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class LoanSeeder extends Seeder
{
    public function run()
    {
      // User model
        $user = $this->db->table('users');
        $user->select('id');
        $usid = $user->get();

        // Books model
        $books = $this->db->table('books');
        $books->select('id');
        $bookid = $books->get();

        // Time
        $now = new Time('now', 'Pacific/Honolulu');

        // faker initialize
        $lm = model('LoanModel');
        $faker    = \Faker\Factory::create('en_US');

        for ($i = 1; $i < 30; $i++) {
            $borrow_date  = new Time("2021-12-$i", 'Pacific/Honolulu');
            $return_date = $borrow_date->addDays(7);
            
            for ($j = 0; $j < rand(1, 9); $j++) {
                $uid = $faker->randomElement($usid->getResult('array'));
                $bid = $faker->randomElement($bookid->getResultArray());
    
                $lm->save([
                    'loan_code'   => uniqid(),
                    'book_code'         => $bid,
                    'userid'            => $uid,
                    'borrow_date'    => $borrow_date->toDateString(),
                    'return_date'   => $return_date->toDateString(),
                    'loan_status' => ($return_date < $now) ? 1 : $faker->randomElement([0, 2, 3])
                ]);
            }
        }

        /** loan status
         * 1 dikembalikan   / returned
         * 2 dipinjamkan    / lent
         * 3 proses         / process
         * 0 ditolak        / rejected 
         **/
    }
}
