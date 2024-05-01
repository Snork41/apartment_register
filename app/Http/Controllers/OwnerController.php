<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return 'Страница списка Владельцев';
    }

    public function create()
    {
        return 'Страница создания Владельца';
    }

    public function store(Request $request)
    {
        return 'Запрос создания Владельца';
    }

    public function show(string $id)
    {
        return "Страница просмотра конкретного Владельца c id $id";
    }

    public function edit(string $id)
    {
        return "Запрос изменения Владельца c id $id";
    }

    public function update(Request $request, string $id)
    {
        return "Запрос обновления Владельца с id $id";
    }

    public function destroy(string $id)
    {
        return "Запрос удаления Владельца с id $id";
    }
}
