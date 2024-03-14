<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSide\Category;

class fill_categories_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = [
           'Politics', 'Sports', 'Technology', 'Entertainment', 'Health', 'Science', 'Business', 'Education', 'Travel', 'Fashion',
           'Food', 'Music', 'Art', 'Environment', 'Finance', 'Fitness', 'History', 'Literature', 'Movies', 'Pets', 'Photography',
           'Religion', 'Space', 'Weather', 'Gaming', 'DIY', 'Cars', 'Books', 'Comedy', 'Crafts', 'Dating', 'Home', 'Language',
           'Outdoors', 'Parenting', 'Philosophy', 'Self-Improvement', 'Shopping', 'Social Media', 'Television', 'Writing',
           'Anime', 'Cosplay', 'Dance', 'Meditation', 'Yoga', 'Adventure', 'Beauty', 'Celebrities', 'Cooking', 'Design',
           'Exploration', 'Hobbies', 'Humanitarian', 'Journalism', 'Marketing', 'Nature', 'Nutrition', 'Psychology', 'Science Fiction',
           'Spirituality', 'Video Games', 'Lifestyle', 'Craftsmanship', 'Gardening', 'Culture', 'Entertainment', 'Technology',
           'Architecture', 'Space', 'Health', 'Art', 'History', 'Fashion', 'Finance', 'Literature', 'Music', 'Sports',
           'Travel', 'Food', 'Environment', 'Science', 'Education', 'Photography', 'Religion', 'Business', 'Movies', 'Books',
           'Pets', 'Language', 'Comedy', 'Nature', 'Writing', 'Television', 'Philosophy', 'Social Media', 'Fitness', 'Weather',
           'Cars', 'Outdoors', 'Parenting', 'DIY', 'Shopping', 'Gaming', 'Self-Improvement', 'Crafts', 'Technology', 'Music',
           'Art', 'Movies', 'Books', 'Sports', 'Travel', 'Food', 'Health', 'Business', 'Finance', 'Fashion', 'Education',
           'Writing', 'Photography', 'Science', 'History', 'Politics', 'Entertainment', 'Technology', 'Architecture', 'Space',
           'Health', 'Art', 'History', 'Fashion', 'Finance', 'Literature', 'Music', 'Sports', 'Travel', 'Food', 'Environment',
           'Science', 'Education', 'Photography', 'Religion', 'Business', 'Movies', 'Books', 'Pets', 'Language', 'Comedy',
           'Nature', 'Writing', 'Television', 'Philosophy', 'Social Media', 'Fitness', 'Weather', 'Cars', 'Outdoors',
           'Parenting', 'DIY', 'Shopping', 'Gaming', 'Self-Improvement', 'Crafts', 'Technology', 'Music', 'Art', 'Movies',
           'Books', 'Sports', 'Travel', 'Food', 'Health', 'Business', 'Finance', 'Fashion', 'Education', 'Writing',
           'Photography', 'Science', 'History', 'Politics', 'Entertainment', 'Technology', 'Architecture', 'Space', 'Health',
           'Art', 'History', 'Fashion', 'Finance', 'Literature', 'Music', 'Sports', 'Travel', 'Food', 'Environment', 'Science',
           'Education', 'Photography', 'Religion', 'Business', 'Movies', 'Books', 'Pets', 'Language', 'Comedy', 'Nature',
           'Writing', 'Television', 'Philosophy', 'Social Media', 'Fitness', 'Weather', 'Cars', 'Outdoors', 'Parenting',
           'DIY', 'Shopping', 'Gaming', 'Self-Improvement', 'Crafts', 'Technology', 'Music', 'Art', 'Movies', 'Books',
           'Sports', 'Travel', 'Food', 'Health', 'Business', 'Finance', 'Fashion', 'Education', 'Writing', 'Photography',
           'Science', 'History', 'Politics', 'Entertainment', 'Technology', 'Architecture', 'Space', 'Health', 'Art',
           'History', 'Fashion', 'Finance', 'Literature', 'Music', 'Sports', 'Travel', 'Food', 'Environment', 'Science',
           'Education', 'Photography', 'Religion', 'Business', 'Movies', 'Books', 'Pets', 'Language', 'Comedy', 'Nature',
           'Writing', 'Television', 'Philosophy', 'Social Media', 'Fitness', 'Weather', 'Cars', 'Outdoors', 'Parenting',
           'DIY', 'Shopping', 'Gaming', 'Self-Improvement', 'Crafts', 'Technology', 'Music', 'Art', 'Movies', 'Books',
           'Sports', 'Travel', 'Food', 'Health', 'Business', 'Finance', 'Fashion', 'Education', 'Writing', 'Photography',
           'Science', 'History', 'Politics'
       ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
