<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        \App\Models\User::factory(9)->create();

        \App\Models\User::factory()->create([
            'name' => 'test',
            'email' => 'test@example.com',
        ]);

        // Residence
        $residences = [
            'Greenland', 
            'Puri Nirwana Gajayana', 
            'Graha Merjosari Asri', 
            'Permata Jingga', 
            'Villa Bukit Tidar', 
            'Bukit Cemara Tidar', 
            'Istana Gajayana', 
            'Green Orchid', 
            'Sigura Gura Green Park',
        ];
        for ($i = 0; $i < count($residences); $i++) {
            \App\Models\Residence::create([
                'residence_name' => $residences[$i],
            ]);
        }

        $getResidences = \App\Models\Residence::get();
        $data = [
            [
                'aksesibilitas' => str_split("354433553"),
                'fasilitas_umum' => str_split("522543342"),
                'keamanan' => str_split("533544443"),
                'harga' => str_split("233122224"),
                'lebar_jalan' => str_split("542554452"),
                'overall' => str_split("433543442"),
            ],
            [
                'aksesibilitas' => str_split("332432143"),
                'fasilitas_umum' => str_split("423322134"),
                'keamanan' => str_split("322323233"),
                'harga' => str_split("231323223"),
                'lebar_jalan' => str_split("222312334"),
                'overall' => str_split("321322134"),
            ],
            [
                'aksesibilitas' => str_split("254511541"),
                'fasilitas_umum' => str_split("522533341"),
                'keamanan' => str_split("522533442"),
                'harga' => str_split("122122513"),
                'lebar_jalan' => str_split("531543541"),
                'overall' => str_split("532533441"),
            ],
            [
                'aksesibilitas' => str_split("244423542"),
                'fasilitas_umum' => str_split("443323433"),
                'keamanan' => str_split("343323434"),
                'harga' => str_split("253122214"),
                'lebar_jalan' => str_split("243413331"),
                'overall' => str_split("253322534"),
            ],
            [
                'aksesibilitas' => str_split("254522452"),
                'fasilitas_umum' => str_split("522543351"),
                'keamanan' => str_split("523434242"),
                'harga' => str_split("544544454"),
                'lebar_jalan' => str_split("432433442"),
                'overall' => str_split("434544453"),
            ],
            [
                'aksesibilitas' => str_split("554512554"),
                'fasilitas_umum' => str_split("533543342"),
                'keamanan' => str_split("543555551"),
                'harga' => str_split("322433341"),
                'lebar_jalan' => str_split("543543243"),
                'overall' => str_split("543443342"),
            ],
            [
                'aksesibilitas' => str_split("233533434"),
                'fasilitas_umum' => str_split("354442334"),
                'keamanan' => str_split("433533444"),
                'harga' => str_split("344434435"),
                'lebar_jalan' => str_split("143431445"),
                'overall' => str_split("323532435"),
            ],
            [
                'aksesibilitas' => str_split("143421542"),
                'fasilitas_umum' => str_split("432454521"),
                'keamanan' => str_split("414544544"),
                'harga' => str_split("433544453"),
                'lebar_jalan' => str_split("531422441"),
                'overall' => str_split("433543531"),
            ],
            [
                'aksesibilitas' => str_split("334212523"),
                'fasilitas_umum' => str_split("312243512"),
                'keamanan' => str_split("433334333"),
                'harga' => str_split("522235533"),
                'lebar_jalan' => str_split("433134423"),
                'overall' => str_split("123132215"),
            ],
            [
                'aksesibilitas' => str_split("000012541"),
                'fasilitas_umum' => str_split("000033242"),
                'keamanan' => str_split("000024342"),
                'harga' => str_split("000043325"),
                'lebar_jalan' => str_split("000034351"),
                'overall' => str_split("000024341"),
            ],
        ];

        // Generate Data Uji
        for ($j=0; $j <= 9; $j++) { 
            foreach ($getResidences as $key => $residence) {
                \App\Models\Rating::create([
                    'user_id' => $j+1,
                    'residence_id' => $residence->id,
                    'aksesibilitas' => $data[$j]['aksesibilitas'][$key],
                    'fasilitas_umum' => $data[$j]['fasilitas_umum'][$key],
                    'keamanan' => $data[$j]['keamanan'][$key],
                    'harga' => $data[$j]['harga'][$key],
                    'lebar_jalan' => $data[$j]['lebar_jalan'][$key],
                    'overall' => $data[$j]['overall'][$key],
                ]);
    
            }
        }
    }
}