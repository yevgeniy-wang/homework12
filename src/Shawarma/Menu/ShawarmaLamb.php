<?php

namespace Hillel\Homework12\Shawarma\Menu;

use Hillel\Homework12\Shawarma\Shawarma;

class ShawarmaLamb extends Shawarma
{
    public function __construct()
    {
        $this->setCost(85);
        $this->setIngredients(['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский']);
        $this->setTitle('Шаурма из Баранины');
    }
}