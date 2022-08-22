<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $producto1 = new Product();
        $producto1->name='Ibuprofeno';
        $producto1->details='El ibuprofeno de venta libre se utiliza para reducir la fiebre y aliviar los dolores menores por de cefalea, dolor muscular, artritis, periodos menstruales, resfriado común, dolor de muelas y dolor de espalda.';
        $producto1->price='15800';
        $producto1->amount='32';
        $producto1->image_path='4.jpg';
        $producto1->save();

        $producto2 = new Product();
        $producto2->name='Noxpirim';
        $producto2->details='Antigripal compuesto por acetaminofén, cafeína, cetirizina y fenilefrina. Controla síntomas de la gripa común como son: dolor de cabeza, congestión nasal.';
        $producto2->price='12800';
        $producto2->amount='20';
        $producto2->image_path='5.jpg';
        $producto2->save();

        $producto3 = new Product();
        $producto3->name='Sal de Frutas LUA';
        $producto3->details='Compra Sal de Frutas Lua Plus y alivia estómago inflado, gases, pesadez y llenura. No esperes más, compra online en Lopido.com y recibe en tu casa. Alivia malestar estomacal. No más gases. Alivia la pesadez.        .';
        $producto3->price='5050';
        $producto3->amount='12';
        $producto3->image_path='6.jpg';
        $producto3->save();

        $producto4 = new Product();
        $producto4->name='Vitamina C';
        $producto4->details='La vitamina C es una vitamina hidrosoluble. Es necesaria para el crecimiento y desarrollo normales. Las vitaminas hidrosolubles se disuelven en agua.';
        $producto4->price='6300';
        $producto4->amount='10';
        $producto4->image_path='7.jpg';
        $producto4->save();


    }
}
