<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    public $items = null;
    public $qtd = 0;
    public $total = 0;

    protected $fillable = [
        'id',
        'utilizador',
    ];

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
