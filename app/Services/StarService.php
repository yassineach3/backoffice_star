<?php


namespace App\Services;


use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StarService
{

    public static function index()
    {
        $stars = Star::all();

        return view('home', compact('stars'));
    }

    public static function store($request)
    {
        if (Gate::denies('update-delete-star'))
        {
            return redirect('/');
        }

        $path = $request->file('image')->store('public/star/image');
        self::SaveStar($request, new Star(), $path);

        session()->flash('star_created');
        return redirect('/');
    }

    public static function edit($id)
    {
        if (Gate::denies('update-delete-star'))
        {
            return redirect('/');
        }

        $star = Star::findOrFail($id);

        return view('star.edit', compact('star'));
    }

    public static function update($request, $star)
    {
        if (Gate::denies('update-delete-star'))
        {
            return redirect('/');
        }

        $path = $request->file('image')->store('public/star/image');
        self::SaveStar($request, $star, $path);

        session()->flash('star_updated');
        return redirect('/');
    }

    public static function destroy($id)
    {
        if (Gate::denies('update-delete-star'))
        {
            return redirect('/');
        }
        $star = Star::findOrFail($id);
        $star->delete();

        session()->flash('star_deleted');
        return redirect('/');
    }

    /**
     * @param $request
     * @param Star $star
     * @param $path
     */
    protected static function SaveStar($request, Star $star, $path): Star
    {
        $star->nom = $request->nom;
        $star->prenom = $request->prenom;
        $star->description = $request->description;
        $star->image = $path;
        $star->save();
        return $star;

    }
}
