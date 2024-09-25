<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        // dd($type);
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->name);

        if (Type::where('slug', $slug)->exists()) {
            return redirect()->back()->withErrors(['name' => 'Questo tipo esiste già.'])->withInput();
        }

        Type::create([
            'name' => $request->name,
            'slug' => $slug
        ]);

        return redirect()->route('admin.types.index')->with('success', 'Categoria aggiunta con successo!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.types.edit', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->route('admin.types.index')->with('success', 'Categoria eliminata con successo.');
    }

    public function typePosts()
    {
        $types = Type::with('posts')->get();
        // $type = Type::all();
        // dump($type);
        return view('admin.types.typePosts', compact('types'));
    }
}
