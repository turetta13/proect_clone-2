<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    public static $categories = array(
        'tort' => [

            'tem' => [
                'name' => 'Тематические',
                'children' =>
                    array('hp' => 'День Рождения',
                        '8march' => '8 марта',
                        'named' => 'Именные',
                        'child' => 'Детские',
                        'wedding' => 'Свадьба'),

            ],
            'sostav' => [
                'name' => 'Состав',
                'children' =>
                    array('medovik' => 'Медовик',
                        'napoleon' => 'Наполеон',
                        'biskvit' => 'Бисквит'),
            ]

            ,
        ],
        'piroj' => [
            'name' => 'Пирожные',
            'children' =>
                array(
                    'cupcake' => 'Капкейки',
                    'beze' => 'Безе',
                    'pavlova' => 'Десерт Павлова',
                )
        ],

        'candybar' => [
            'name' => 'КендиБар',
            'children' => array('сandybar' => 'КендиБар'),
        ],

        'other' => [
            'name' => 'Другое',
            'children' => array('pryanik' => 'Пряники',
                'zefir' => 'Зефир',
                'postila' => 'Пастила',
                'chetvertinka' => 'Торт Четвертинки'),
        ],

        'reviews' => [
            'name' => 'Отзывы',
            'children' => array('reviews' => 'Наши Отзывы',
                ),
        ]
    );
}
