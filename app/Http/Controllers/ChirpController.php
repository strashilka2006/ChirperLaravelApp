<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $chirps = [
            [
                'author' => 'Артём',
                'message' => 'Первый чирп',
                'time' => '2 минуты назад',
            ],
            [
                'author' => 'Кто-то ещё',
                'message' => 'И второй',
                'time' => '5 минут назад',
            ],
        ];

        return view('home', ['chirps' => $chirps]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
