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
         /*$this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(CategorySeeder2::class);
         $this->call(CategorySeeder3::class);
         $this->call(TagSeeder::class);
         $this->call(SupplierSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(SlideSeeder::class);
         $this->call(NewsSeeder::class);
         $this->call(CategoryBlogSeeder::class);*/
         $this->call(TagBlogSeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(CreditCart::class);
         $this->call(VouchersSeeder::class);
         $this->call(BannerSeeder::class);
         $this->call(DealHotSeeder::class);
    }
}
