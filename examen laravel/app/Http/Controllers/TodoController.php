<?php namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Request;

class TodoController extends Controller {


	public function __construct()
	{
		$this->middleware('auth' , ['except' => 'home']);
	}



	public function overview()
	{

		//return Auth::user()->todo()->save(new Todo($request->all()));

		$done = Todo::latest()->authenticate()->done()->get();

		$todo = Todo::latest()->authenticate()->notdone()->get();

		//$passtrugh = [1 => [1 => 'All done.' , 2 => $done , ], 2 => [1 => 'Stuff to do, places to be.' , 2 => $todo]];

		//return $passtrugh;

		return view('pages.overview', compact('todo', 'done'));
	}





	public function addpage()
	{
		return view('pages.add');
	}


	public function dashboard()
	{
		return view('pages.dashboard');
	}


	public function home()
	{
		return view('pages.home');
	}


	/**
	*adds todo to the database
	*/

	public function add(Requests\Addtodo $request)
	{

		Auth::user()->todos()->save(new Todo($request->all()));

		//session()->flash('flash_message', 'Todo added');

		//return redirect('todo')->with([ 'flash_message'=> 'Todo added' ]);

		flash()->success('Todo created');

		return redirect('todo');
	}


	public function delete()
	{
		if ($vars = Todo::authenticate()->find(Request::input('poster'))) 
		{
			$vars->delete();

			flash()->success( $vars->content . ' removed');
		}
		else
		{
			flash()->error('are you sure this is your todo');
		}

		return redirect('todo');
	}

	public function toedit()
	{
		if ($vars = Todo::authenticate()->find(Request::input('poster'))) 
		{
			$vars->done = 0;

			$vars->save();

			flash()->success( $vars->content . ' is set as todo');
		}
		else
		{
			flash()->error('something went wrong');
		}

		return redirect('todo');

	}

	public function doedit()
	{
		if ($vars = Todo::authenticate()->find(Request::input('poster'))) 
		{
			$vars->done = 1;

			$vars->save();

			flash()->success($vars->content . ' is done');
		}
		else
		{
			flash()->error('something went wrong');
		}

		return redirect('todo');

	}

	
}
