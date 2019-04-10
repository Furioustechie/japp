<!--Top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Dashboard</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(auth()->user()->unreadNotifications->count()>0)
              <i class="material-icons">notifications_active</i>
              <span class="notification animated infinite flash delay-2s">{{ auth()->user()->unreadNotifications->count() }}</span>
              @else
              <i class="material-icons">notifications</i>
              @endif
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" style="background-color:cornflowerblue" href="/readnotify"> Mark All as Read</a>
              @if(auth()->user()->user_type=='admin')
              @foreach (auth()->user()->unreadNotifications as $notification)
               <a class="dropdown-item" href="{{url('/hcDetails')}}">{{$notification->data['data']}}</a>
              @endforeach
              @elseif(auth()->user()->user_type=='user')
              @foreach (auth()->user()->unreadNotifications as $notification)
              <a class="dropdown-item" href="{{url('appeals')}}">{{$notification->data['data']}}</a>
             @endforeach
              @endif
              {{-- @if(auth()->user()->readNotifications->count(['read_at' != null]))
              @foreach (auth()->user()->readNotifications as $notification)
              <a  style="backgroud-color:green" class="dropdown-item" href="{{url('/read')}}">{{$notification->data['data']}}</a>
                @endforeach
                @endif --}}

            </div>
          </li>
        
                @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <i class="material-icons">person</i> {{ Auth::user()->name }} <span class="caret"></span>
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
              </p>
            </a>
         
        </ul>
      </div>
    </div>
  </nav>