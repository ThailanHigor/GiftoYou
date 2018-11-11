<?php
use App\Lojas;
use Illuminate\Database\Seeder;

class LojasTableSeeder extends Seeder
{

    public function run()
    {

        $lojas = [
            [
            'Nome'     => 'Lojas Americanas',
            'Slug' => 'lojas-americanas',
            'Latitude'    => '-29.023',
            'Longitude' => '12.3242',
            'Imagem_Thumb' => 'americanas.jpg',
            'Excluido' => false,
            'Liberado' => true,
            ],

            [
                'Nome'     => 'Renner',
                'Slug' => 'renner',
                'Latitude'    => '-29.023',
                'Longitude' => '12.3242',
                'Imagem_Thumb' => 'renner.png',
                'Excluido' => false,
                'Liberado' => true,
            ],

            [
                'Nome'     => 'Casas Bahia',
                'Slug' => 'casas-bahia',
                'Latitude'    => '-29.023',
                'Longitude' => '12.3242',
                'Imagem_Thumb' => 'bahia.jpg',
                'Excluido' => false,
                'Liberado' => true,
            ],

            [
                'Nome'     => 'Burguer King',
                'Slug' => 'burguer-king',
                'Latitude'    => '-29.023',
                'Longitude' => '12.3242',
                'Imagem_Thumb' => 'burguer.png',
                'Excluido' => false,
                'Liberado' => true,
            ],
        ];
        foreach($lojas as $loja){
            Lojas::create($loja);
        }
    }

}
