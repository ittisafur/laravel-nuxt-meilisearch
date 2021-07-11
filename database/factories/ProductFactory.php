<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
//            $table->string('title');
//            $table->string('slug')->unique();
//            $table->string('teaser');
//            $table->integer('price');
//            $table->integer('rating');
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word;

        return [
            'title' => $title,
            'slug' => Str::slug($title) . Str::random(6),
            'teaser' => $this->faker->word,
            'price' => rand(1000 , 10000),
            'rating' => rand(1, 5),
            'brand_id' => Brand::all()->random()->id
        ];
    }
}
