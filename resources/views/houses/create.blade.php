@extends('layouts.base')

@section('title', 'Добавить дом')

@section('content')


<h1 class="mb-5">Добавить дом</h1>

<div class="row justify-content-center">

    <x-errors />

    <div class="card col-8 my-3">
        <div class="card-body">
            <form action="{{ route('houses.store') }}" method="POST" class="d-flex flex-column">
                @csrf
                <div class="mb-3">
                    <label for="address" class="mb-1 required">Адрес</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_storeys" class="mb-1 required">Количество этажей</label>
                    <input type="number" id="number_of_storeys" name="number_of_storeys" value="{{ old('number_of_storeys') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_apartments" class="mb-1 required">Количество квартир</label>
                    <input type="number" id="number_of_apartments" name="number_of_apartments" value="{{ old('number_of_apartments') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="year_of_construction" class="mb-1 required">Год постройки</label>
                    <input type="number" id="year_of_construction" name="year_of_construction" value="{{ old('year_of_construction') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_elevators" class="mb-1 required">Количество лифтов</label>
                    <input type="number" id="number_of_elevators" name="number_of_elevators" value="{{ old('number_of_elevators') }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-light align-self-center col-4">Создать</button>
            </form>
        </div>
    </div>
</div>

@endsection