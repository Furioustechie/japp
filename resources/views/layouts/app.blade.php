<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jail Appeal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
   

    <link href="{{URL::asset('css/particles.css')}}" rel="stylesheet" />

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
   body {
  background: radial-gradient(circle, grey, white);
}
    /* SLIDER STRUCTURE */

#slider {
   background: transparent;
/*    border: 5px solid #eaeaea; 
   box-shadow: 1px 1px 5px rgba(0,0,0,0.7);  */
   height: 320px;
   width: 100%;
   margin: 40px auto 0px;
   overflow: visible;
   position: relative;
}
/* HIDE ALL OUTSIDE OF THE SLIDER */

#mask {
   overflow: hidden;
   height: 180px;
}
/* IMAGE LIST */

#slider ul {
   margin: 0;
   padding: 0;
   position: relative;
}

#slider li {
   width: 100%;  /* Width Image */
   height: 320px; /* Height Image */
   position: absolute;
   top: -325px; /* Original Position - Outside of the Slider */
   list-style: none;
}
#slider li.firstanimation {
   animation: cycle 25s linear infinite;
}

#slider li.secondanimation {
   animation: cycletwo 25s linear infinite;
}

#slider li.thirdanimation {
   animation: cyclethree 25s linear infinite;
}

#slider li.fourthanimation {
   animation: cyclefour 25s linear infinite;
}

#slider li.fifthanimation {
   animation: cyclefive 25s linear infinite;
}
/* ANIMATION */

@keyframes cycle {
   0%  { top: 0px; } /* When you start the slide, the first image is already visible */
   4%  { top: 0px; } /* Original Position */
   16% { top: 0px; opacity:1; z-index:0; } /* From 4% to 16 % = for 3 seconds the image is visible */
   20% { top: 325px; opacity: 0; z-index: 0; } /* From 16% to 20% = for 1 second exit image */
   21% { top: -325px; opacity: 0; z-index: -1; } /* Return to Original Position */
   92% { top: -325px; opacity: 0; z-index: 0; }
   96% { top: -325px; opacity: 0; } /* From 96% to 100% = for 1 second enter image*/
   100%{ top: 0px; opacity: 1; }
}

@keyframes cycletwo {
   0%  { top: -325px; opacity: 0; } /* Original Position */
   16% { top: -325px; opacity: 0; }/* Starts moving after 16% to this position */
   20% { top: 0px; opacity: 1; }
   24% { top: 0px; opacity: 1; }  /* From 20% to 24% = for 1 second enter image*/
   36% { top: 0px; opacity: 1; z-index: 0; }   /* From 24% to 36 % = for 3 seconds the image is visible */
   40% { top: 325px; opacity: 0; z-index: 0; } /* From 36% to 40% = for 1 second exit image */
   41% { top: -325px; opacity: 0; z-index: -1; }   /* Return to Original Position */
   100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cyclethree {
   0%  { top: -325px; opacity: 0; }
   36% { top: -325px; opacity: 0; }
   40% { top: 0px; opacity: 1; }
   44% { top: 0px; opacity: 1; }
   56% { top: 0px; opacity: 1; }
   60% { top: 325px; opacity: 0; z-index: 0; }
   61% { top: -325px; opacity: 0; z-index: -1; }
   100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cyclefour {
   0%  { top: -325px; opacity: 0; }
   56% { top: -325px; opacity: 0; }
   60% { top: 0px; opacity: 1; }
   64% { top: 0px; opacity: 1; }
   76% { top: 0px; opacity: 1; z-index: 0; }
   80% { top: 325px; opacity: 0; z-index: 0; }
   81% { top: -325px; opacity: 0; z-index: -1; }
   100%{ top: -325px; opacity: 0; z-index: -1; }
}
@keyframes cyclefive {
   0%  { top: -325px; opacity: 0; }
   76% { top: -325px; opacity: 0; }
   80% { top: 0px; opacity: 1; }
   84% { top: 0px; opacity: 1; }
   96% { top: 0px; opacity: 1; z-index: 0; }
   100%{ top: 325px; opacity: 0; z-index: 0; }
}
/* PROGRESS BAR */

.progress-bar {
   position: relative;
   top: -10px;
   width: 100%;
   height: 5px;
   background: #000;
   animation: fullexpand 25s ease-out infinite;
}
/* ANIMATION BAR */

@keyframes fullexpand {
   /* In these keyframes, the progress-bar is stationary */
   0%, 20%, 40%, 60%, 80%, 100% { width: 0%; opacity: 0; }

   /* In these keyframes, the progress-bar starts to come alive */
   4%, 24%, 44%, 64%, 84% { width: 0%; opacity: 0.3; }

   /* In these keyframes, the progress-bar moves forward for 3 seconds */
   16%, 36%, 56%, 76%, 96% { width: 100%; opacity: 0.7; }

   /* In these keyframes, the progress-bar has finished his path */
   17%, 37%, 57%, 77%, 97% { width: 100%; opacity: 0.3; }

   /* In these keyframes, the progress-bar will disappear and then resume the cycle */
   18%, 38%, 58%, 78%, 98% { width: 100%; opacity: 0; }
}
#slider .tooltip {
   background: rgba(0,0,0,0.7);
   width: 300px;
   height: 60px;
   position: relative;
   bottom: 75px;
   left: -320px;
}

#slider .tooltip h1 {
   color: #fff;
   font-size: 24px;
   font-weight: 300;
   line-height: 60px;
   padding: 0 0 0 10px;
}
#slider .tooltip {
…
   transition: all 0.3s ease-in-out;
}

#slider li#first: hover .tooltip,
#slider li#second: hover .tooltip,
#slider li#third: hover .tooltip,
#slider li#fourth: hover .tooltip,
#slider li#fifth: hover .tooltip {
   left: 0px;
}
#slider: hover li,
#slider: hover .progress-bar {
   animation-play-state: paused;
}


/* ---- particles.js container ---- */



    </style>
</head>
<body>
<div id="particles-js"></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{URL::asset('locale/bn')}}">
                            BN
                          </a></li>
                          <li class="nav-item"><a class="nav-link" href="{{URL::asset('locale/en')}}">
                            EN
                          </a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                {{-- @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif --}}
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
        <main class="py-4">
        <div class="container">
         <div id="content-slider">
            <div id="slider">  <!-- Slider container -->
               <div id="mask" style="text-align:center;">  <!-- Mask -->

               <ul>
               <li id="first" class="firstanimation">  <!-- ID for tooltip and class for animation -->
               <a href="#"> <img src="{{URL::asset('assets/img/bdg.png')}}" style="height:150px;text-align:center;"  alt="Bangladesh Govt."/> </a>
               <div class="tooltip"> <h1>Ganaprajatantri Bangladesh Sarkar</h1> </div>
               </li>

               <li id="second" class="secondanimation">
               <a href="#"> <img src="{{URL::asset('assets/img/sc.png')}}" style="height:150px;text-align:center;" alt="Bangladesh SC"/> </a>
               <div class="tooltip"> <h1>Supreme Court of Bangladesh</h1> </div>
               </li>

               <li id="third" class="thirdanimation">
               <a href="#"> <img src="{{URL::asset('assets/img/bdj.png')}}" style="height:150px;text-align:center;" alt="Bangladesh Jail"/> </a>
               <div class="tooltip"> <h1>Bangladesh Jail</h1> </div>
               </li>

               <li id="fourth" class="fourthanimation">
               <a href="#"> <img src="{{URL::asset('assets/img/FCDO_UK_RGB.png')}}" style="height:150px;text-align:center;" alt="Foreign, Commonwealth & Development Office"/> </a>
               <div class="tooltip"> <h1>UK Aid</h1> </div>
               </li>

               <li id="fifth" class="fifthanimation">
               <a href="#"> <img src="{{URL::asset('assets/img/giz.png')}}" style="height:150px; width:500px;text-align:center;" alt="GIZ"/> </a>
               <div class="tooltip"> <h1>GIZ</h1> </div>
               </li>
               </ul>

               </div>  <!-- End Mask -->
               <div class="progress-bar"></div> <br> <!-- Progress Bar -->
               <div class="text-default w-100 font-weight-bold " id="ProjTitle" style="color:Black;text-align:center;">@lang('labels.project_name')</div>  <!-- Progress Bar -->
            </div>  <!-- End Slider Container -->
         </div>
      </div>
        </main>
    </div>

   

<script src="{{URL::asset('js/particles.js')}}"></script>
    <script src="{{URL::asset('js/parti-app.js')}}"></script>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script type="text/javascript">
	
var typed = new Typed('#ProjTitle', {
  strings: ["Jail Appeal Application Tracking Tool", "Jail Appeal Application Tracking Tool"],
  typeSpeed: 50,
  backspeed:0,
  loop: true,
  smartBackspace: true
}); -->

</script>
</html>
