<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ClientType;
use Illuminate\Database\Seeder;

class ClientTypeSeeder extends Seeder
{

    public function run(): void
    {
        $clientTypes = ClientType::getAllClientTypes();
        foreach ($clientTypes as $clientType) {
            ClientType::create([
                'name' => $clientType,
                'label' => ucfirst($clientType)
            ]);
        }
    }
}
