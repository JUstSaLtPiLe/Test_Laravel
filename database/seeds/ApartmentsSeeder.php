<?php

use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments') -> truncate();
        \Illuminate\Support\Facades\DB::table('apartments') -> insert([
            [
                'name' => 'Apartment 1',
                'district' => 'District 1',
                'price' => '5000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],
            [
                'name' => 'Apartment 2',
                'district' => 'District 1',
                'price' => '5000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 3',
                'district' => 'District 1',
                'price' => '5000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 4',
                'district' => 'District 1',
                'price' => '5000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 5',
                'district' => 'District 2',
                'price' => '14000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],
            [
                'name' => 'Apartment 6',
                'district' => 'District 2',
                'price' => '14000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 7',
                'district' => 'District 2',
                'price' => '14000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 8',
                'district' => 'District 2',
                'price' => '14000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 9',
                'district' => 'District 3',
                'price' => '25000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 10',
                'district' => 'District 3',
                'price' => '25000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 11',
                'district' => 'District 3',
                'price' => '25000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 12',
                'district' => 'District 3',
                'price' => '25000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 13',
                'district' => 'District 4',
                'price' => '45000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 14',
                'district' => 'District 4',
                'price' => '45000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 15',
                'district' => 'District 4',
                'price' => '45000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 16',
                'district' => 'District 4',
                'price' => '60000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 17',
                'district' => 'District 5',
                'price' => '60000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 18',
                'district' => 'District 5',
                'price' => '60000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 19',
                'district' => 'District 5',
                'price' => '60000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],[
                'name' => 'Apartment 20',
                'district' => 'District 5',
                'price' => '60000',
                'image' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg'
            ],
        ]);
    }
}
