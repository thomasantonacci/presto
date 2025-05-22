<?php

namespace Database\Seeders;

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


      $users= [
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

      foreach ($users as $user){
         User::create($user);
      }
   }
}
