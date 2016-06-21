<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 09.01.16
 * Time: 15:00
 * To change this template use File | Settings | File Templates.
 */
class Model_Portfolio extends Model
{

    public function get_data()
    {

        // Здесь мы просто сэмулируем реальные данные.

        return array(

            array(
                'Year' => '2012',
                'Site' => 'http://DunkelBeer.ru',
                'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
            ),

            array(
                'Year' => '2012',
                'Site' => 'http://ZopoMobile.ru',
                'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
            ),

            array(
                'Year' => '2012',
                'Site' => 'http://GeekWear.ru',
                'Description' => 'Интернет-магазин брендовой одежды для гиков.'
            ),

            array(
                'Year' => '2011',
                'Site' => 'http://РоналВарвар.рф',
                'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'
            ),

            array(
                'Year' => '2011',
                'Site' => 'http://TompsonTatoo.ru',
                'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'
            ),

            array(
                'Year' => '2011',
                'Site' => 'http://DaftState.ru',
                'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
            ),

            array(
                'Year' => '2011',
                'Site' => 'http://TiltPeople.ru',
                'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
            ),

            array(
                'Year' => '2011',
                'Site' => 'http://AbsurdGames.ru',
                'Description' => 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
            ),

        );
    }

    public function get_carousel()
    {
        return array(
            array(
                'name' => 'Italy',
                'images' => 'images/destination_1.jpg',
                'text' => 'Rome, Milan, Naples',
                'text2' => 'SILVER HOTEL, 4 NIGHTS, 5 STARS',
                'url' => '#',
                'cena' => '$1,800 Book Now',
            ),
            array(
                'name' => 'France',
                'images' => 'images/destination_2.jpg',
                'text' => 'Paris, Marseille, Lyon',
                'text2' => 'NEW PALACE, 5 NIGHTS, 5 STARS',
                'url' => '#',
                'cena' => '$2,300 Book Now',
            ),
            array(
                'name' => 'Germany',
                'images' => 'images/destination_3.jpg',
                'text' => 'Berlin, Hamburg, Munich',
                'text2' => 'LUXE HOTEL, 5 NIGHTS, 6 STARS',
                'url' => '#',
                'cena' => '$3,100 Book Now',
            ),
            array(
                'name' => 'Spain',
                'images' => 'images/destination_4.jpg',
                'text' => 'Madrid, Bercelona, Valencia',
                'text2' => 'GOOD HOTEL, 4 NIGHTS, 6 STARS',
                'url' => '#',
                'cena' => '$4,800 Book Now',
            ),
            array(
                'name' => 'Netherlands',
                'images' => 'images/destination_5.jpg',
                'text' => 'Amsterdam, Delft, The Hague',
                'text2' => 'BEST HOTEL, 6 NIGHTS, 7 STARS',
                'url' => '#',
                'cena' => '$5,600 Book Now',
            ),
            array(
                'name' => 'Switzerland',
                'images' => 'images/destination_6.jpg',
                'text' => 'Zürich, Geneva, Basel',
                'text2' => 'NEW HOTEL, 7 NIGHTS, 7 STARS',
                'url' => '#',
                'cena' => '$6,300 Book Now',
            ),
        );
    }
}
