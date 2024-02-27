<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskStatuses = TaskStatus::paginate();

        return view('task_status.index', compact('taskStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taskStatus = new TaskStatus();
        return view('task_status.create', compact('taskStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate(
            $request,
            [
                'name' => 'required|unique:task_statuses'
            ],
            [
                'name.unique' => __('validation.task_status.unique')
            ]
        );

        $taskStatus = new TaskStatus();
        $taskStatus->fill($validatedData);
        $taskStatus->save();
        flash(__('flashes.task_statuses.store.success'))->success();

        return redirect()->route('task_statuses.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskStatus $taskStatus)
    {
        return view('task_status.edit', compact('taskStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskStatus $taskStatus)
    {
        $validatedData = $this->validate(
            $request,
            [
                'name' => 'required|unique:task_statuses,name' . $taskStatus->id
            ],
            [
                'name.unique' => __('validation.task_status.unique')
            ]
        );

        $taskStatus->fill($validatedData);
        $taskStatus->save();

        flash(__('flashes.task_statuses.updated'))->success();
        return redirect()->route('task_statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        $taskStatus->delete();

        flash(__('flashes.task_statuses.deleted'))->success();
        return redirect()->route('task_statuses.index');
    }
}
