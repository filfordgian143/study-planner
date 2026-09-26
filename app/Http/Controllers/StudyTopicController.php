<?php

namespace App\Http\Controllers;

use App\Models\StudyTopic;
use Illuminate\Http\Request;

class StudyTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $studyTopics = StudyTopic::latest('study_date')->get();

    return view('study-topics.index', compact('studyTopics'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('study-topics.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'subject' => 'required|string|max:255',
        'topic' => 'required|string|max:255',
        'study_date' => 'required|date',
        'priority' => 'required|string',
    ]);

    StudyTopic::create($validated);

    return redirect()->route('study-topics.index')
        ->with('success', 'Study topic added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(StudyTopic $studyTopic)
{
    return view('study-topics.show', compact('studyTopic'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyTopic $studyTopic)
{
    return view('study-topics.edit', compact('studyTopic'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyTopic $studyTopic)
{
    $validated = $request->validate([
        'subject' => 'required|string|max:255',
        'topic' => 'required|string|max:255',
        'study_date' => 'required|date',
        'priority' => 'required|string',
        'completed' => 'nullable|boolean',
    ]);

    $studyTopic->update($validated);

    return redirect()->route('study-topics.index')
        ->with('success', 'Study topic updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyTopic $studyTopic)
{
    $studyTopic->delete();

    return redirect()->route('study-topics.index')
        ->with('success', 'Study topic deleted successfully!');
}
}
