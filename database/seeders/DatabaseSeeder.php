<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
   public $categories = [
      'elettronica',
      'abbigliamento',
      'salute e bellezza',
      'casa e giardinaggio',
      'giocattoli',
      'sport',
      'animali domestici',
      'libri e riviste',
      'accessori',
      'motori',

   ];
   public function run(): void
   {
      foreach ($this->categories as $category) {
         Category::create(['name' => $category]);
      }


      $users = [
         [
            "name" => "Linda",
            "email" => "linda@mail.com",
            "is_admin" => false,
            "is_revisor" => false,
            "email_verified_at" => now(),
            "password" => Hash::make("linda1234"),
            "created_at" => now(),
            "updated_at" => now()
         ],
         [
            "name" => "Pino",
            "email" => "pino@mail.com",
            "is_admin" => false,
            "is_revisor" => false,
            "email_verified_at" => now(),
            "password" => Hash::make("pino1234"),
            "created_at" => now(),
            "updated_at" => now()
         ],
         [
            "name" => "Pablo",
            "email" => "pablo@mail.com",
            "is_admin" => false,
            "is_revisor" => true,
            "email_verified_at" => now(),
            "password" => Hash::make("pablo1234"),
            "created_at" => now(),
            "updated_at" => now(),

         ],
         [
            "name" => "Arnold",
            "email" => "arnold@mail.com",
            "is_admin" => false,
            "is_revisor" => false,
            "email_verified_at" => now(),
            "password" => Hash::make("arnold1234"),
            "created_at" => now(),
            "updated_at" => now()
         ],
         [
            "name" => "Guohua",
            "email" => "guohua@mail.com",
            "is_admin" => false,
            "is_revisor" => false,
            "email_verified_at" => now(),
            "password" => Hash::make("guohua1234"),
            "created_at" => now(),
            "updated_at" => now()
         ],
         [
            "name" => "Michele",
            "email" => "michele@mail.com",
            "is_admin" => true,
            "is_revisor" => false,
            "email_verified_at" => now(),
            "password" => Hash::make("michele1234"),
            "created_at" => now(),
            "updated_at" => now(),

         ]

      ];

      foreach ($users as $user) {
         User::create($user);
      }

      $articles = [
         [
            "title" => "Smartphone Samsung Galaxy",
            "description" => "Smartphone di ultima generazione con display AMOLED.",
            "price" => 399.99,
            "category_id" => 1,
            "user_id" => 1
         ],
         [
            "title" => "Giacca invernale uomo",
            "description" => "Giacca calda e resistente per l'inverno.",
            "price" => 89.90,
            "category_id" => 2,
            "user_id" => 1
         ],
         [
            "title" => "Set skincare viso",
            "description" => "Kit completo per la cura della pelle.",
            "price" => 29.99,
            "category_id" => 3,
            "user_id" => 1
         ],
         [
            "title" => "Robot tagliaerba",
            "description" => "Robot automatico per il taglio del prato.",
            "price" => 499.00,
            "category_id" => 4,
            "user_id" => 1
         ],
         [
            "title" => "Pallone da calcio",
            "description" => "Pallone professionale per allenamento e partita.",
            "price" => 24.50,
            "category_id" => 6,
            "user_id" => 1
         ],
         [
            "title" => "Cuffie Bluetooth",
            "description" => "Cuffie wireless con cancellazione del rumore.",
            "price" => 59.99,
            "category_id" => 1,
            "user_id" => 1
         ],
         [
            "title" => "Scarpe da running",
            "description" => "Scarpe leggere e traspiranti per la corsa.",
            "price" => 74.90,
            "category_id" => 2,
            "user_id" => 1
         ],
         [
            "title" => "Crema idratante",
            "description" => "Crema viso nutriente per tutti i tipi di pelle.",
            "price" => 19.99,
            "category_id" => 3,
            "user_id" => 1
         ],
         [
            "title" => "Set attrezzi giardinaggio",
            "description" => "Set completo di attrezzi per il giardinaggio.",
            "price" => 34.50,
            "category_id" => 4,
            "user_id" => 1
         ],
         [
            "title" => "Bicicletta da bambino",
            "description" => "Bicicletta colorata con rotelle per bambini.",
            "price" => 120.00,
            "category_id" => 6,
            "user_id" => 1
         ]

      ];

      foreach ($articles as $article) {
         Article::create($article);
      }
   }
}
