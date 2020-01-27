@include('partials.dropdown-btn', [
    'options' => [
        [
            'option' => trans('common.seeMore'),
            'url' => route('rooms.show', ['id' => Hashids::encode($row->id)]),
        ],
        [
            'option' => trans('assets.add'),
            'url' => '#',
        ],
        [
            'option' => trans('products.add'),
            'url' => '#',
        ],
        [
            'type' => 'divider'
        ],
        [
            'option' => trans('common.edit'),
            'url' => route('rooms.edit', [
                'id' => Hashids::encode($row->id)
            ]),
        ],
        [
            'type' => 'confirm',
            'option' => trans('common.delete'),
            'url' => route('rooms.destroy', [
                'id' => Hashids::encode($row->id)
            ]),
            'method' => 'DELETE'
        ],
    ]
])
