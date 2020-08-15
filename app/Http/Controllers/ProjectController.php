<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function getRecent10()
    {
        $projects = Project::latest()
        ->take(10)
        ->get();
        return $projects;
    }

    public function fragment()
    {
        Project::chunk(200, function ($projects) {
            foreach ($projects as $project) {
                //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
                // se recorrera con 200 registros, luego otros 200
                // hasta que se ejecute con todos
            }
        });
    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
    
        return "Guardado";
    }

    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

    public function deleteProject() {
        $project = Project::where('project_id', '>', 15)->delete();
        return "Registros eliminados";
    }

    public function getActiveProjects()
    {
        $projects = Project::active()->get();
        return $projects;
    }
    

    // public function insertProject(Request $request) {
    //     $project = new Project;
    //     $project->city_id = $request->cityId;
    //     $project->company_id = $request->companyId;
    //     $project->user_id = $request->userId;
    //     $project->name = $request->name;
    //     $project->execution_date = $request->executionDate;
    //     $project->is_active = $request->isActive;
    //     $project->save();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
