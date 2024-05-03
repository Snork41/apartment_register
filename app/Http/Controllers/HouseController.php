<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return view('houses.index', ['houses' => House::all()]);
    }

    public function create()
    {
        return view('houses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => ['required', 'string', 'max:255', 'unique:houses,address'],
            'number_of_storeys' => ['required', 'integer', 'min:1'],
            'number_of_apartments' => ['required', 'integer', 'min:1'],
            'year_of_construction' => ['required',  'integer', 'between:1910,'.date('Y')],
            'number_of_elevators' => ['required', 'integer', 'min:0'],
        ]);

        House::create($validated);

        return redirect('/houses');
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
