<?php

namespace App\Livewire;

use Livewire\Component;

class Pricing extends Component
{
    public $plans = [
        [
            'name' => 'Basic',
            'price' => 9.99,
            'period' => 'month',
            'features' => [
                'Access to standard quality videos',
                '100 downloads per month',
                'Basic support',
            ],
            'recommended' => false,
        ],
        [
            'name' => 'Premium',
            'price' => 19.99,
            'period' => 'month',
            'features' => [
                'Access to HD quality videos',
                'Unlimited downloads',
                'Priority support',
                'Access to exclusive content',
            ],
            'recommended' => true,
        ],
        [
            'name' => 'Enterprise',
            'price' => 49.99,
            'period' => 'month',
            'features' => [
                'Access to 4K quality videos',
                'Unlimited downloads',
                'Premium support',
                'Access to exclusive content',
                'Commercial usage rights',
                'API access',
            ],
            'recommended' => false,
        ]
    ];

    public function render()
    {
        return view('livewire.pricing')
            ->layout('layouts.app');
    }
}
