<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('persons.index', ['persons' => Person::all()]);
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'last_name' => ['required', 'string', 'max:100'],
            'first_name' => ['required', 'string', 'max:100'],
            'middle_name' => ['nullable', 'string', 'max:100'],
            'date_of_birth' => ['required',  'date'],
            'number_of_pasport' => ['required', 'integer', 'digits:10', 'unique:persons,number_of_pasport'],
        ]);

        Person::create($validated);

        return redirect('/persons');
    }

    public function show(string $id)
    {
        return "Страница просмотра конкретного Человека c id $id";
    }

    public function edit(string $id)
    {
        return "Запрос изменения Человека c id $id";
    }

    public function update(Request $request, string $id)
    {
        return "Запрос обновления Человека с id $id";
    }

    public function destroy(string $id)
    {
        return "Запрос удаления Человека с id $id";
    }
}
