<?php

class NerdController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//getting all nerd
		$nerds = Nerd::all();

		//make viewnya
		return View::make('nerds.index')->with('nerds', $nerds);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('nerds.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nerd = Input::all();
		$nerd = new Nerd;
		$nerd->name = Input::get('name');
		$nerd->email = Input::get('email');
		$nerd->nerd_level = Input::get('nerd_level');
		$nerd->save();

		Session::flash('message', 'Successfully created nerd!');
		return Redirect::to('nerds');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$nerd = Nerd::find($id);

		//show the nerd and pass the nerd to it
		return View::make('nerds.show')->with('nerd', $nerd);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$nerd = Nerd::find($id);
		return View::make('nerds.edit')->with('nerd', $nerd);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$nerd = Nerd::find($id);
		$nerd->name = Input::get('name');
		$nerd->email = Input::get('email');
		$nerd->nerd_level = Input::get('nerd_level');
		$nerd->save();

		Session::flash('message', 'Successfully updated nerd!');
		return Redirect::to('nerds');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$nerd = Nerd::find($id);
		$nerd->delete();

		Session::flash('message', 'Successfully deleted nerd!');
		return Redirect::to('nerds');
	}


}
