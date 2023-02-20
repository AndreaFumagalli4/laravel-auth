<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create', ['project' => new Project()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
                'title' => 'required|min:2|max:80|unique:projects',
                'thumb' => 'required|active_url',
                'used_language' => 'required|max:255',
                'link' => 'required|active_url'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio; per favore inserisci un titolo',
                'title.min' => 'Hai scritto un titolo troppo corto; per favore inseriscine uno più lungo',
                'title.max' => 'Hai scritto un titolo troppo lungo; per favore inseriscine uno più corto',
                'thumb.required' => 'L\'immagine è obbligatoria; per favore inseriscila',
                'thumb.active_url' => 'L\'url che hai inserito non è valido: inseriscine uno valido',
                'used_language.required' => 'Il linguaggio utilizzato è obbligatorio; per favore inserisci un titolo',
                'used_language.min' => 'Hai scritto il linguaggio utilizzato troppo corto; per favore inseriscine uno più lungo',
                'used_language.max' => 'Hai scritto il linguaggio utilizzato troppo lungo; per favore inseriscine uno più corto',
                'link.required' => 'Il link è obbligatorio; per favore inseriscilo',
                'link.active_url' => 'L\'url che hai inserito non è valido: inseriscine uno valido',
            ]);

            $newProject = new Project();
            $newProject->fill($data);
            $newProject->save();

            return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
