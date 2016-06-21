<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 16.01.16
 * Time: 22:42
 * To change this template use File | Settings | File Templates.
 */
class Model_Main extends Model
{
    public function get_slides()
    {
        return array(
            array(
                'images' => 'images/templatemo_slide_1.jpg',
                'cena' => '$8,450',
                'name' => 'Venice, Italy',
                'text' => 'Travel is free template by <span class="blue">template</span><span class="green">mo</span>. <br>
                                All images used in this template are from
                                <a rel="nofollow" href="http://unsplash.com">Unsplash</a>.',
                'url' => '#',
                'next' => 'Pre-booking',
            ),
            array(
                'images' => 'images/templatemo_slide_2.jpg',
                'cena' => '$12,380',
                'name' => 'Bercelona, Spain',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.',
                'url' => '#',
                'next' => 'Reserve Now',
            ),
            array(
                'images' => 'images/templatemo_slide_3.jpg',
                'cena' => '$21,640',
                'name' => 'Basel, Switzerland',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.',
                'url' => '#',
                'next' => 'Book Now',
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