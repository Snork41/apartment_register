@extends('layouts.base')

@section('title', 'Люди')

@section('content')
    
<h1 class="mb-4">Люди</h1>

<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Фамилия</th>
        <th scope="col" class="text-center">Имя</th>
        <th scope="col" class="text-center">Отчество</th>
        <th scope="col" class="text-center">Дата рождения</th>
        <th scope="col" class="text-center">Номер паспорта</th>
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
            </tr>
        @endforeach
    </tbody>
</table>

@endsection