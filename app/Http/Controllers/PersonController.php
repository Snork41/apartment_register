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
        return 'Страница создания Человека';
    }

    public function store(Request $request)
    {
        return 'Запрос создания Человека';
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
