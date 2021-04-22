<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Bondowoso',
            'nomor_tlp' => '08xxxxxxx',
            'ttl' => '2002-02-23',
            'foto' => 'picture.png'
        ]);
    }
}
