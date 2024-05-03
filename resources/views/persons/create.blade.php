@extends('layouts.base')

@section('title', 'Добавить человека')

@section('content')


<h1 class="mb-5">Добавить человека</h1>

<div class="row justify-content-center">

    <x-errors />

    <div class="card col-8 my-3">
        <div class="card-body">
            <form action="{{ route('persons.store') }}" method="POST" class="d-flex flex-column">
                @csrf
                <div class="mb-3">
                    <label for="last_name" class="mb-1 required">Фамилия</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="mb-1 required">Имя</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="middle_name" class="mb-1">Отчество</label>
                    <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="mb-1 required">Дата рождения</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_pasport" class="mb-1 required">Номер паспорта</label>
                    <input type="number" id="number_of_pasport" name="number_of_pasport" value="{{ old('number_of_pasport') }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-light align-self-center col-4">Создать</button>
            </form>
        </div>
    </div>
</div>

@endsection