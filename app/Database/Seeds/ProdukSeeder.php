<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'id' => ' ',
                        'name'   => 'baju panjang'
                    ],
                    [
                        'id' => ' ',
                        'name'   => 'celana panjang'
                    ],

                ];

                  $this->db->table('produk')->insertBatch($data);
              
        }
}