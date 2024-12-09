<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run()
    {
        Store::create([
            'user_id' => 3, // Mağaza sahibi kullanıcı ID'si
            'name' => 'Example Store',
            'address' => '123 Example Street',
        ]);
    }
}

