<div class="crud-list-row">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            @can('hotels.show')
                <a href="{{ route('hotels.show', ['id' => Hashids::encode($row->id)]) }}">
                    <img class="img-fluid" src="{{ empty($row->image) ? asset('/images/hotel.png') : asset(Storage::url($row->image)) }}" alt="{{ $row->business_name }}">
                </a>
            @endcan
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3   col-lg-3  align-self-center">
            <p>
                @can('hotels.show')
                    <a href="{{ route('hotels.show', ['id' => Hashids::encode($row->id)]) }}">
                        {{ $row->business_name }}
                    </a>
                @endcan
            </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-self-center">
            <p>
                @can('hotels.show')
                    <a href="{{ route('hotels.show', ['id' => Hashids::encode($row->id)]) }}">
                        {{ $row->tin }}
                    </a>
                @endcan
            </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 align-self-center">
            <p>
                @can('hotels.show')
                    <a href="{{ route('hotels.show', ['id' => Hashids::encode($row->id)]) }}">
                        {{ $row->created_at->format('Y-m-d') }}
                    </a>
                @endcan
            </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 align-self-center">
            <p>
                @can('hotels.show')
                    <a href="{{ route('hotels.show', ['id' => Hashids::encode($row->id)]) }}">
                        <i class="fa fa-{{ $row->status ? 'check-circle' : 'times-circle' }}"></i>
                    </a>
                @endcan
            </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 align-self-center">
            @include('partials.dropdown-btn', [
                'options' => [
                    [
                        'option' => 'Ver',
                        'url' => route('hotels.show', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'permission' => 'hotels.show'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'option' => trans('common.edit'),
                        'url' => route('hotels.edit', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'permission' => 'hotels.edit'
                    ],
                    [
                        'option' => $row->status ? trans('common.disable') : trans('common.enable'),
                        'url' => route('hotels.toggle', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'permission' => 'hotels.edit'
                    ],
                    [
                        'type' => 'confirm',
                        'option' => trans('common.delete'),
                        'url' => route('hotels.destroy', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'method' => 'DELETE',
                        'permission' => 'hotels.destroy'
                    ],
                ]
            ])
        </div>
    </div>
</div>
