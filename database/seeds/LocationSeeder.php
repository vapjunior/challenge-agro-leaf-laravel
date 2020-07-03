<?php

use Illuminate\Database\Seeder;
use App\Location;
use Grimzy\LaravelMysqlSpatial\Types\Point;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [[
            'name' => 'Ribeirão Preto',
            'description' => 'Por ser a sede da Bem Agro',
            'polygon_id_agroapi' => NULL,
            'lat' => -21.205417,
            'lng' => -47.810166,
        ],[
            'name' => 'São Paulo',
            'description' => 'Produção de café',
            'polygon_id_agroapi' => NULL,
            'lat' => -23.545122,
            'lng' => -46.636666,
        ],[
            'name' => 'Porto Alegre',
            'description' => 'Pela capacidade de produção',
            'polygon_id_agroapi' => NULL,
            'lat' => -30.036968,
            'lng' => -51.219046,
        ],[
            'name' => 'Belo Horizonte',
            'description' => 'Por ser capital de Minas Gerais',
            'polygon_id_agroapi' => NULL,
            'lat' => -19.932201,
            'lng' => -43.938253,
        ],[
            'name' => 'Rio Janeiro',
            'description' => 'Pelas rotas da região serrana',
            'polygon_id_agroapi' => NULL,
            'lat' => -22.948980,
            'lng' => -43.289049,
        ]];

        Location::insert($locations);
    }
}
