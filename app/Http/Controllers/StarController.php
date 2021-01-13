<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Services\StarService;
use App\Http\Requests\StarRequest;
use Illuminate\Support\Facades\Gate;

class StarController extends Controller
{
    public function index()
    {
        return StarService::index();
    }

    public function show($id)
    {
        $star = Star::findOrFail($id);
        return view('star.show', compact('star'));
    }

    public function create()
    {
        if (Gate::denies('update-delete-star'))
        {
            return redirect('/');
        }
        return view('star.create');
    }

    public function store(StarRequest $star)
    {
        return StarService::store($star);
    }

    public function edit($id)
    {
        return StarService::edit($id);
    }

    public function update(StarRequest $request, Star $star)
    {
        return StarService::update($request, $star);
    }

    public function destroy($id)
    {
        return StarService::destroy($id);
    }

}
