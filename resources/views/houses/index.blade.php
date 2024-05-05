@extends('layouts.base')

@section('title', 'Дома')

@section('content')

<div class="row flex-nowrap align-items-center mb-4">
    <h1 class="col-10">Дома</h1>
    <a class="btn btn-light col-2" href="{{ route('houses.create') }}">
        <img class="me-2" src="{{ asset('img/svg/building-add.svg') }}" alt="building-add">
        Добавить дом
    </a>
</div>

<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Адрес</th>
        <th scope="col" class="text-center">Кол-во этажей</th>
        <th scope="col" class="text-center">Кол-во квартир</th>
        <th scope="col" class="text-center">Год постройки</th>
        <th scope="col" class="text-center">Кол-во лифтов</th>
        <th scope="col" class="text-center">Изменить/Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($houses as $house)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $house['address'] }}</td>
                <td class="text-center">{{ $house['number_of_storeys'] }}</td>
                <td class="text-center">{{ $house['number_of_apartments'] }}</td>
                <td class="text-center">{{ $house['year_of_construction'] }}</td>
                <td class="text-center">{{ $house['number_of_elevators'] }}</td>
                <td class="text-center">
                    <div class="row">
                        <a href="{{ route('houses.edit', ['house' => $house->id]) }}" class="col-6"><img src="{{ asset('img/svg/building-fill-gear.svg') }}" alt="building-fill-gear"></a>
                        <form 
                            action="{{ route('houses.destroy', ['house' => $house->id]) }}" 
                            method="POST" 
                            onsubmit="return confirm('Вы уверены, что хотите удалить этот дом?');"
                            class="col-6">
                            @csrf
                            @method('DELETE')
                            <button class="button-delete">
                                <img src="{{ asset('img/svg/building-fill-slash.svg') }}" alt="building-fill-slash">
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection