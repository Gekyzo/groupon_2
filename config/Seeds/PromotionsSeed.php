<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Promotions seed.
 */
class PromotionsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Sesión de Spa GOLD',
                'state' => 1,
                'category_id' => 1,
                'price_original' => 95,
                'price_discount' => 70,
                'body' => 'Disfruta de un circuito completo de Spa y sauna Coreana con un masaje de tu elección. La duración total del circuito es de dos horas.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Masaje bienestar en Columnata Spa',
                'state' => 1,
                'category_id' => 1,
                'price_original' => 45,
                'price_discount' => 30,
                'body' => 'Disfruta de un circuito completo de Spa y sauna Coreana con un masaje de tu elección. La duración total del circuito es de dos horas.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Circuito termal en Saline Spa',
                'state' => 1,
                'category_id' => 2,
                'price_original' => 50,
                'price_discount' => 25,
                'body' => 'Relájate con esta novedosa experiencia. Flota como si estuvieras en el Mar Muerto, pero sin moverte de Logroño.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Ritual Dao',
                'state' => 1,
                'category_id' => 2,
                'price_original' => 50,
                'price_discount' => 20,
                'body' => 'Inspirada en la ceremonia del té de Japón, The Ritual of Chadō adopta el arte de la atención, despertando tu alma e inspirándote para vivir cada momento con una profundidad y armonía.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => '2 noches + desayuno + cava + Spa en hotel 4',
                'state' => 1,
                'category_id' => 4,
                'price_original' => 210,
                'price_discount' => 75.80,
                'body' => 'Disfruta de una escapada con encanto al Pirineo Aragonés con 1 o 2 noches con desayuno incluido, circuito Spa y cava en el precioso hotel Real Villa Anayet ¡De 4 estrellas!',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Tour de enoturismo',
                'state' => 1,
                'category_id' => 4,
                'price_original' => 150,
                'price_discount' => 45,
                'body' => 'Escápate de enoturismo a la Rioja, la Ruta del Vino más internacional, cuna de grandes vinos y bodegas centenarias.
                Elige entre una selección de Escapadas de enoturismo repartidas entre La Rioja y la Rioja Alavesa, con o sin hotel, y descubre los secretos de la cata en esta reconocida región con nombre de vino.
                también podrás combinar Catas de Vino y Paseos a caballo entre viñedos, visitas culturales y más actividades',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Escapada Ezcaray con Visita a Bodega',
                'state' => 1,
                'category_id' => 5,
                'price_original' => 119,
                'price_discount' => 96,
                'body' => 'Disfruta de esta espectacular escapada para los amantes del vino y de la naturaleza en pleno Valle de Ezcaray
                Este apartamento para 2 adultos cuenta con cocina totalmente equipada y dispuesta para cualquier receta culinaria.
                Pásalo en grande con la visita a la bodega que tenemos preparada para ti. ¡Te encantará!',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Escapada romántica en Haro',
                'state' => 1,
                'category_id' => 5,
                'price_original' => 135,
                'price_discount' => 95,
                'body' => 'Una completa escapada para visitar Haro, alojarse en un hotel emblemático mezcla perfecta de tradición y modernidad, disfrutar de la rica gastronomía local riojana con un menú tradicional con diferentes opciones entre las que elegir, y una visita a reconocida bodega de Rioja con vinos de gran calidad que podrás catar al finalizar la interesante visita guiada a las instalaciones de la bodega.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Cena en Kiro Sushi',
                'state' => 1,
                'category_id' => 6,
                'price_original' => 100,
                'price_discount' => 40,
                'body' => 'Disfruta de la mejor comida asiática de Logroño.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Cabrito asado en Cachetero',
                'state' => 1,
                'category_id' => 6,
                'price_original' => 60,
                'price_discount' => 35,
                'body' => 'Disfruta del un Cabrito asado en el mejor asador de Logroño.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Tapeo en Torres Gastrobar',
                'state' => 1,
                'category_id' => 6,
                'price_original' => 22,
                'price_discount' => 8,
                'body' => 'Siempre es un acierto hacer una parada para comer y beber algo. Gran variedad de vinos, para todos los gustos. Una combinación de tapas tradicionales con otras más actualizadas.',
                'available_since' => '2020-03-01 12:00:00',
            ],
            [
                'name' => 'Menu degustación La Cocina de Ramón',
                'state' => 1,
                'category_id' => 6,
                'price_original' => 32,
                'price_discount' => 25,
                'body' => 'Productos de primerísima calidad, y muy innovador en la cocina. Se nota que hay profesionalidad y empeño.',
                'available_since' => '2020-03-01 12:00:00',
            ],
        ];

        $table = $this->table('promotions');
        $table->insert($data)->save();
    }
}
