<?php

namespace App\Http\Controllers;

use App\Models\accounting\journal_entry;
use Illuminate\Http\Request;

class JournalEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
     * @param  \App\Models\accounting\journal_entry  $journal_entry
     * @return \Illuminate\Http\Response
     */
    public function show(journal_entry $journal_entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accounting\journal_entry  $journal_entry
     * @return \Illuminate\Http\Response
     */
    public function edit(journal_entry $journal_entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accounting\journal_entry  $journal_entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, journal_entry $journal_entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accounting\journal_entry  $journal_entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(journal_entry $journal_entry)
    {
        //
    }
}
