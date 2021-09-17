<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $account = Account::create(['name' => 'Quản Lý Nhân Sự']);

        User::factory()->create([
            'account_id' => $account->id,
            'first_name' => 'Sĩ',
            'last_name' => 'Ben',
            'email' => 'admin@email.com',
            'password' => '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK',
            'owner' => true,
        ]);

        User::factory()->create([
            'account_id' => $account->id,
            'first_name' => 'Vũ',
            'last_name' => 'Hán',
            'email' => 'user@email.com',
            'password' => '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK',
            'owner' => false,
        ]);

        // User::factory(5)->create(['account_id' => $account->id]);

        $organizations = Organization::factory(100)
            ->create(['account_id' => $account->id]);

        Contact::factory(100)
            ->create(['account_id' => $account->id])
            ->each(function ($contact) use ($organizations) {
                $contact->update(['organization_id' => $organizations->random()->id]);
            });
    }
}
