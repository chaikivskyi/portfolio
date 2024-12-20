<?php

namespace App\Spotify\DTO;

use Spatie\LaravelData\DataCollection;

class ArtistsSearchData extends PaginationData
{
    /**
     * @var DataCollection<int, ArtistsItemData>
     */
    public DataCollection $items;
}
