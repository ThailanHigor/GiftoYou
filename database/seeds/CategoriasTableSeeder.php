<?php
use App\Categorias;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{

    public function run()
    {

        $categorias = [
            [
                'Nome'     => 'Vestuário',
                'Imagem_Thumb' => 'vestuario.svg',
                'Excluido' => false,
                'Liberado' => true,
            ],

            [
                'Nome'     => 'Eletrônicos',
                'Imagem_Thumb' => 'eletronicos.svg',
                'Excluido' => false,
                'Liberado' => true,
            ],

            [
                'Nome'     => 'Livros',
                'Imagem_Thumb' => 'livros.svg',
                'Excluido' => false,
                'Liberado' => true,
            ],

            [
                'Nome'     => 'Móveis',
                'Imagem_Thumb' => 'moveis.svg',
                'Excluido' => false,
                'Liberado' => true,
            ],
        ];
        foreach($categorias as $categoria){
            Categorias::create($categoria);
        }
    }

}
