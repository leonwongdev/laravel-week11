<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Requests\StoreChannelRequest;
use App\Http\Requests\UpdateChannelRequest;
use Illuminate\Support\Facades\Log;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show the index.blade.php view
        Log::info('Channels.index request received.');
        return view('channels.index', [
            'channels' => Channel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::info('Channels.create request received.');
        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChannelRequest $request)
    {
        $channel = Channel::create($request->all());

        return redirect()->route('channels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel)
    {
        // Show the show.blade.php view
        return view('channels.show', compact('channel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        // Load the 'edit' view and pass the existing channel instance to the view.
        return view('channels.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChannelRequest $request, Channel $channel)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        // Update the channel using the validated data
        $channel->update($validatedData);

        // Redirect to the desired route (e.g., the index route) with a success message
        return redirect()->route('channels.index');
    }

    // Trash a Channel (Soft delete)
    public function trash($id)
    {
        Log::info('Channels.trashed request received.');
        Channel::destroy($id);
        return redirect()->route('channels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        //
    }
}
