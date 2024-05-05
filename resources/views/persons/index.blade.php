@extends('layouts.base')

@section('title', 'Люди')

@section('content')
    
<div class="row flex-nowrap align-items-center mb-4">
    <h1 class="col-10">Люди</h1>
    <a class="btn btn-light col-2" href="{{ route('persons.create') }}">
        <img class="me-2" src="{{ asset('img/svg/person-add.svg') }}" alt="person-add">
        Добавить человека
    </a>
</div>

<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Фамилия</th>
        <th scope="col" class="text-center">Имя</th>
        <th scope="col" class="text-center">Отчество</th>
        <th scope="col" class="text-center">Дата рождения</th>
        <th scope="col" class="text-center">Номер паспорта</th>
        <th scope="col" class="text-center">Изменить/Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($persons as $person)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="text-center">{{ $person['last_name'] }}</td>
                <td class="text-center">{{ $person['first_name'] }}</td>
                <td class="text-center">{{ $person['middle_name'] }}</td>
                <td class="text-center">{{ $person['date_of_birth']->format('d.m.Y') }}</td>
                <td class="text-center">{{ $person['number_of_pasport'] }}</td>
                <td class="text-center">
                    <div class="row">
                        <a href="{{ route('persons.edit', ['person' => $person->id]) }}" class="col-6"><img src="{{ asset('img/svg/person-fill-gear.svg') }}" alt="person-fill-gear"></a>
                        <x-forms.delete
                            :action-route="'persons.destroy'"
                            :object="'person'"
                            :object-id="$person->id"
                            :confirm-message="'этого человека'"
                            :button-image="'person-fill-slash.svg'"
                        />
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection