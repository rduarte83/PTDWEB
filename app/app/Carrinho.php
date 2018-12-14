<?php

namespace App;

class Carrinho
{
    public $items = null;
    public $qtd = 0;
    public $total = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->qtd = $oldCart->qtd;
            $this->total = $oldCart->total;
        }
    }

    public function add ($item, $id) {
        $storedItem = ['qtd' => 0, 'preco' => $item->preco, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qtd']++;
        $storedItem['preco'] = $item->preco * $storedItem['qtd'];
        $this->items[$id] = $storedItem;
        $this->total++;
        $this->total += $item->preco;
    }
}
