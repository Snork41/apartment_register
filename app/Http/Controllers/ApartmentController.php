<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        return 'Страница списка Квартир';
    }

    public function create()
    {
        return 'Страница создания Квартиры';
    }

    public function store(Request $request)
    {
        return 'Запрос создания Квартиры';
    }

    public function show(string $id)
    {
        return "Страница просмотра конкретной Квартиры c id $id";
    }

    public function edit(string $id)
    {
        return "Запрос изменения Квартиры c id $id";
    }

    public function update(Request $request, string $id)
    {
        return "Запрос обновления Квартиры с id $id";
    }

    public function destroy(string $id)
    {
        return "Запрос удаления Квартиры с id $id";
    }
}
