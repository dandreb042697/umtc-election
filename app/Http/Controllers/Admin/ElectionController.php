<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreElectionRequest;
use App\Http\Requests\Admin\UpdateElectionRequest;
use App\Models\Department;
use App\Models\Election;
use App\Models\ElectionType;
use function view;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $elections = Election::with(['electionType', 'department'])->latest()->paginate(10);
        return view('admin.elections.index', compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.elections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\StoreElectionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreElectionRequest $request)
    {
        $election = Election::create($request->validated());

        return redirect()->route('admin.elections.show', compact('election'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Election $election
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Election $election)
    {
        $positions = $election->loadMissing('electionType')->electionType->positions;
        return view('admin.elections.show', compact('election', 'positions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Election $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Admin\UpdateElectionRequest $request
     * @param \App\Models\Election $election
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectionRequest $request, Election $election)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Election $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(Election $election)
    {
        //
    }
}
