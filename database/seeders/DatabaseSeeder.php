<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;
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
        $books = [
            [
                'The Hunger Games',
                'Suzanne Collins',
                'https://images.gr-assets.com/books/1447303603m/2767052.jpg',
                null,
                null
            ],
            [
                'Harry Potter and the Philosopher\'s Stone',
                'J.K. Rowling, d Mary GrandPré',
                'https://images.gr-assets.com/books/1474154022m/3.jpg',
                null,
                null
            ],
            [
                'Twilight',
                'Stephenie Meyer',
                'https://images.gr-assets.com/books/1361039443m/41865.jpg',
                null,
                null
            ],
            [
                'To Kill a Mockingbird',
                'Harper Lee',
                'https://images.gr-assets.com/books/1361975680m/2657.jpg',
                null,
                null
            ],
            [
                'The Great Gatsby',
                'F. Scott Fitzgerald',
                'https://images.gr-assets.com/books/1490528560m/4671.jpg',
                null,
                null
            ],
            [
                'The Fault in Our Stars',
                'John Green',
                'https://images.gr-assets.com/books/1360206420m/11870085.jpg',
                null,
                null
            ],
            [
                'The Hobbit or There and Back Again',
                'J.R.R. Tolkien',
                'https://images.gr-assets.com/books/1372847500m/5907.jpg',
                null,
                null
            ],
            [
                'The Catcher in the Rye',
                'J.D. Salinger',
                'https://images.gr-assets.com/books/1398034300m/5107.jpg',
                null,
                null
            ],
            [
                'Angels & Demons ',
                'Dan Brown',
                'https://images.gr-assets.com/books/1303390735m/960.jpg',
                null,
                null
            ],
            [
                'Shade: A Tale of Two Presidents',
                'Pete Souza',
                'https://images-na.ssl-images-amazon.com/images/I/41IgIfhXb0L._AC_US436_FMwebp_QL65_.jpg',
                1,
                1
            ],
            [
                'Into the Wild',
                'Jon Krakauer',
                'https://images-na.ssl-images-amazon.com/images/I/51rJVzn7lsL._AC_US436_FMwebp_QL65_.jpg',
                1,
                2
            ],
            [
                'Leadership Strategy and Tactics: Field Manual',
                'Jocko Willink',
                'https://images-na.ssl-images-amazon.com/images/I/41f1H2rgSoL._AC_US436_FMwebp_QL65_.jpg',
                2,
                3
            ],
            [
                'Dune (Dune Chronicles, d Book 1)',
                'Frank Herbert',
                'https://images-na.ssl-images-amazon.com/images/I/41UZeCEKOBL._AC_US436_FMwebp_QL65_.jpg',
                3,
                5
            ],
            [
                '1984',
                'George Orwell, Erich Fromm',
                'https://images-na.ssl-images-amazon.com/images/I/41aM4xOZxaL._AC_US436_FMwebp_QL65_.jpg',
                3,
                6
            ]
        ];

        foreach ($books as $book) {
            $b                 = new Book;
            $b->title          = $book[ 0 ];
            $b->authors        = $book[ 1 ];
            $b->image          = $book[ 2 ];
            $b->category_id    = $book[ 3 ];
            $b->subcategory_id = $book[ 4 ];
            $b->save();
        }

        $category       = new Category;
        $category->name = 'Biographies & Memoirs';
        $category->save();

        $category       = new Category;
        $category->name = 'Business & Investing';
        $category->save();

        $category       = new Category;
        $category->name = 'Sci-Fi & Fantasy';
        $category->save();


        $subcategory              = new Subcategory;
        $subcategory->category_id = 1;
        $subcategory->name        = 'Historical';
        $subcategory->save();

        $subcategory              = new Subcategory;
        $subcategory->category_id = 1;
        $subcategory->name        = 'Travelers & Explorers';
        $subcategory->save();

        $subcategory              = new Subcategory;
        $subcategory->category_id = 2;
        $subcategory->name        = 'Management & Leadership';
        $subcategory->save();

        $subcategory              = new Subcategory;
        $subcategory->category_id = 2;
        $subcategory->name        = 'Economics';
        $subcategory->save();

        $subcategory              = new Subcategory;
        $subcategory->category_id = 3;
        $subcategory->name        = 'Fantasy';
        $subcategory->save();

        $subcategory              = new Subcategory;
        $subcategory->category_id = 3;
        $subcategory->name        = 'Sci-Fi';
        $subcategory->save();
    }
}
