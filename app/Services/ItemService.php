<?php

namespace App\Services;

use App\Interfaces\ItemRepositoryInterface;

class ItemService
{
    private ItemRepositoryInterface $itemRepository;

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function foo($bar)
    {
        dump($bar);
    }
}
