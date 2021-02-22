<?php

namespace Hillel\Homework12;

class ShawarmaLamb extends Shawarma
{
    public function __construct()
    {
        $this->setCost(85);
        $this->setIngredients(['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский']);
        $this->setTitle('Шаурма из Баранины');
    }
}