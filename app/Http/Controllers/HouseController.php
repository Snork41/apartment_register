<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return 'Страница списка домов';
    }

    public function create()
    {
        return 'Страница создания дома';
    }

    public function store(Request $request)
    {
        return 'Запрос создания дома';
    }

    public function show(string $id)
    {
        return "Страница просмотра конкретного дома c id $id";
    }

    public function edit(string $id)
    {
        return "Запрос изменения дома c id $id";
    }

    public function update(Request $request, string $id)
    {
        return "Запрос обновления дома с id $id";
    }

    public function destroy(string $id)
    {
        return "Запрос удаления дома с id $id";
    }
}
