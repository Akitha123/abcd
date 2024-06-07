<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetableCategories = array(
            "Pet Food" => array("Dog Food", "Cat Food", "Bird Seed", "Small Animal Pellets", "Fish Flakes"),
            "Chew Toys" => array("Rubber Toys", "Plush Toys", "Rawhide Bones", "Dental Chews"),
            "Bedding and Litter" => array("Cat Litter", "Pet Bedding", "Hamster Bedding", "Reptile Substrate"),
            "Grooming Supplies" => array("Shampoos", "Brushes", "Nail Clippers", "Wipes", "Ear Cleaner"),
            "Cages and Habitats" => array("Dog Crates", "Fish Tanks", "Bird Cages", "Reptile Enclosures", "Small Animal Habitats"),
            "Collars and Leashes" => array("Dog Collars", "Cat Collars", "Leashes", "Harnesses"),
            "Aquarium Supplies" => array("Filters", "Heaters", "Ornaments", "Water Conditioners"),
            "Training Aids" => array("Training Pads", "Clickers", "Whistles", "Training Treats"),
            "Health and Wellness" => array("Vitamins", "Supplements", "Flea and Tick Control", "Dental Care"),
            "Toys and Enrichment" => array("Interactive Toys", "Balls", "Feather Wands", "Tunnels", "Treat Dispensers"),
            "Miscellaneous Pet Supplies" => array("Travel Carriers", "Identification Tags", "Pet First Aid Kits", "Pet Strollers"),
        );

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}
