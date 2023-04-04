<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotorRequest;
use App\Models\motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function welcome()
    {
        return view('layouts.welcome');
    }

    public function create()
    {
        $Motor = motor::all();
        return view('motor.create', compact('Motor'));
    }

    public function index()
    {
        $Motor = motor::paginate(6);
        return view('motor.index', compact('Motor'));
    }

    public function store(MotorRequest $request)
    {
        //$this->taskList[$request->label] = $request->task;

        Motor::create([
            'pabrik' => $request->pabrik,
            'jenis' => $request->jenis,
            'cc' => $request->cc,
            'horsepower' => $request->horsepower,
            'torsi' => $request->torsi,
        ]);

        return redirect()->route('home');
    }

    public function edit($id)
    {

        $Motor = motor::where('id', $id)->first();
        return view('motor.edit', compact('Motor'));
    }

    public function update(Request $request, $id)
    {

        $Motor = motor::where('id', $id)->update([
            'pabrik' => $request->pabrik,
            'jenis' => $request->jenis,
            'cc' => $request->cc,
            'horsepower' => $request->horsepower,
            'torsi' => $request->torsi,
        ]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {

        motor::where('id', $id)->delete();
        return redirect()->route('home');
    }
}
