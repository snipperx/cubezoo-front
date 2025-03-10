<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video;
use Livewire\WithPagination;


class Browse extends Component
{
    use WithPagination;

    public $search = '';
    public $category = '';
    public $sortBy = 'newest';

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => ''],
        'sortBy' => ['except' => 'newest']
    ];

    public function mount()
    {
        // Get query parameters from URL if provided
        $this->search = request()->query('search', $this->search);
        $this->category = request()->query('category', $this->category);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function render()
    {
        // This would typically query your database
        // For demonstration purposes, we'll just return an empty collection
        $videos = collect([]);

        return view('livewire.browse', [
            'videos' => $videos
        ])->layout('layouts.app');
    }
}

