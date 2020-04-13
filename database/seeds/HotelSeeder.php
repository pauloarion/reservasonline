<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hotel::class, 50)->create()->each(function ($hotel) {
            $hotel->quartos()->save(factory(App\Quarto::class)->states('standard')->make());
            $hotel->quartos()->save(factory(App\Quarto::class)->states('executivo')->make());
            $hotel->quartos()->save(factory(App\Quarto::class)->states('deluxe')->make());
            $hotel->quartos()->save(factory(App\Quarto::class)->states('solteiro')->make());
            $hotel->quartos()->save(factory(App\Quarto::class)->states('solteiro_duplo')->make());
        });
    }
}
