<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $administrator = new \App\User;         
         $administrator->username = "administrator";         

         $administrator->name = "Irwanto Wibowo";         
         $administrator->email = "irwanto@admin.com";         
         $administrator->roles = json_encode(["ADMIN"]);         
         $administrator->password = \Hash::make("irwanto");
         $administrator->phone = "087838732012";         
         $administrator->avatar = "saat-ini-tidak-ada-file.png";         
         $administrator->address = "Sawah Lama, Bintaro, Tangerang Selatan"; 
 
        $administrator->save(); 
 
        $this->command->info("User Admin berhasil diinsert");
    }
}
