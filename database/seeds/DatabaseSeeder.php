<?php

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
        $this->call(Prefecture::class);
        $this->call(PrefectureGroup::class);
        $this->call(Areas::class);
        $this->call(Companies::class);
        $this->call(Shops::class);
    }
}
