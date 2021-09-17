<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                'name'=>'LG mobile',
                'price'=>'200$',
                'descriptoin'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta.',
                'category'=>'mobile',
                'gallery'=>'https://www.savol-javob.com/wp-content/uploads/2020/05/Paket_Kado_Gift_Valentine_Teddy_Bear_08_Buket_Bunga-869x1024.jpg'
            ],
            [
                'name'=>'XuwaWei mobile',
                'price'=>'200$',
                'descriptoin'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta.',
                'category'=>'mobile',
                'gallery'=>'https://pbs.twimg.com/media/CmOloNaWYAAWnOL.jpg'
            ],
            [
                'name'=>'Samsung mobile',
                'price'=>'200$',
                'descriptoin'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta.',
                'category'=>'mobile',
                'gallery'=>'https://pbs.twimg.com/media/DxIH8eYX0AE98My.jpg:large'
            ],
            [
                'name'=>'Nokis mobile',
                'price'=>'200$',
                'descriptoin'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta.',
                'category'=>'mobile',
                'gallery'=>'https://www.savol-javob.com/wp-content/uploads/2020/05/4MlyYBXUYCmMN27UC6aXF24sXclH0wPqx6VnWsVQf5ZJMgfKtxcKxpE_bJ4q1BLwkm_t-NkLENPAU14tVFnlI8G4s6BRMVRZvXZvEeuDUsPrGbiM5yezK5Mx9zpVJP.jpg'
            ],
            [
                'name'=>'RedME mobile',
                'price'=>'200$',
                'descriptoin'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta.',
                'category'=>'mobile',
                'gallery'=>'https://www.savol-javob.com/wp-content/uploads/2020/05/4MlyYBXUYCmMN27UC6aXF24sXclH0wPqx6VnWsVQfobIVuPbN8dahtCfaD5fUTfV90497dluASPQxr68hLnAY7V44_UBoSQJ-BMvdPvC1vINvz9A-768x768.jpg'
            ]
        );
    }
}
