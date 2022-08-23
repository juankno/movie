<?php

namespace App\Http\Livewire;

use App\Services\TmdbService;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $search = '';


    public function render(TmdbService $movieService)
    {
        $searchResults  = [];

        if (strlen($this->search) >= 2) {
            $searchResults = $movieService->getSearchesMovie($this->search);
        }

        // dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
