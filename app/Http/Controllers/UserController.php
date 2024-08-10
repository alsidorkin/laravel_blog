<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Метод для обработки запроса на список пользователей
        return view('users.index');
    }

    public function show($id)
    {
        // Метод для отображения одного пользователя по его ID
        return view('users.show', ['id' => $id]);
    }

    public function create()
    {
        // Метод для отображения формы создания нового пользователя
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Метод для сохранения нового пользователя
        // Логика для сохранения пользователя в базе данных
    }
}
