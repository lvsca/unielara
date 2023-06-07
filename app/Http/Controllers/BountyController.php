<?php

namespace App\Http\Controllers;

use App\Models\Bounty;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BountyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('bounty.index', [
            'bounties' => Bounty::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bounty.create', [
            'bounties' => Bounty::with('user')->latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request -> validate([
            'name' => 'required|string',
            'category' => 'required',
            'price' => 'required',
        ]);

        $request->user()->bounty()->create($validated);

        return redirect(route('bounty.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bounty $bounty): View
    {
        return view('bounty.show', compact('bounty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bounty $bounty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bounty $bounty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bounty $bounty)
    {
        //
    }
}
