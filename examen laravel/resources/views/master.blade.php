<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('output/final.css') }}">
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery.js" ></script>
        <title>@yield('title')</title>
    </head>


    <body>
    	<div id="container">



    	<header class="group">
            <div>
                <a href="{{ URL::to('home')}}">Home</a>
            </div>

            <nav>
                <ul>
	               
                    @if (Auth::guest()) 

                        <li><a href="{{ URL::to('auth/login')}}">Login</a>
                        </li>
                        <li><a href="{{ URL::to('auth/register')}}">Register</a>
                        </li>

                    @else

	                	<li><a href="{{ URL::to('dashboard')}}">Dashboard</a>
	                    </li>
	                    <li><a href="{{ URL::to('todo')}}">Todos</a>
	                    </li>
	                    <li><a href="{{ URL::to('auth/logout')}}">Logout {{ Auth::user()->name }}</a>
	                    </li>

                    @endif

                </ul>
            </nav>
        </header>

      @include('flash::message')


    		@yield('content')


        </div>

        <script type="text/javascript">

        $('div.alert').not('.alert-important').delay(3000).slideUp(300);


        </script>
    </body>
</html>


