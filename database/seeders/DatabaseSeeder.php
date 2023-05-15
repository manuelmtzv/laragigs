<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    Listing::factory(6)->create();

    // Listing::create(
    //   [
    //     'title' => 'Laravel Senior Developer',
    //     'tags' => 'laravel, javascript',
    //     'company' => 'Acme Corp',
    //     'location' => 'Boston, MA',
    //     'email' => 'email@email.com',
    //     'website' => 'www.company.com',
    //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, aspernatur adipisci rerum hic magni vel dicta enim ad quod natus, illum a doloremque? Doloribus eligendi eveniet odit? Iusto, itaque voluptatum.'
    //   ]
    // );
  }
}
