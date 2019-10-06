<!--Top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand " href="#" id="projectTitle">@lang('labels.project_name')</a>
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
            {{-- <input type="text" value="" class="form-control" placeholder="Search..."> --}}
            {{-- <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button> --}}
          </div>
        </form>
        <?php
         $value = Session::get('locale');
         //echo $value;
        ?>
        <ul class="navbar-nav">
            @if(auth()->user()->user_type=='admin')
            <ul class="navbar-nav">
              @if($value =='bn')
                <li class="nav-item en">
                  <a class="nav-link" href="{{URL::asset('locale/en')}}">
                    <i class="material-icons">language</i>EN
                  </a>
                </li>
                @else
                <li class="nav-item bn">
                  <a class="nav-link" href="{{URL::asset('locale/bn')}}">
                    <i class="material-icons">language</i>BN
                  </a>
                </li>
                @endif
        @elseif(auth()->user()->user_type=='user')
        @if($value =='bn')
        <li class="nav-item en">
          <a class="nav-link" href="{{URL::asset('locale/en')}}">
            <i class="material-icons">language</i>EN
          </a>
        </li>
        @else
        <li class="nav-item bn">
          <a class="nav-link hvr-grow-shadow" href="{{URL::asset('locale/bn')}}">
            <i class="material-icons">language</i>BN
          </a>
        </li>
        @endif
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link hvr-grow-shadow" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(auth()->user()->unreadNotifications->count()>0)
              <i class="material-icons">notifications_active</i>
              <span id="myid">
              <span class="notification" id="countid">{{ auth()->user()->unreadNotifications->count() }}</span>
            </span>
              <script>
                // var timeisup = null;
                // $(document).ready(function(){
                //   setInterval(function(){
                //     $("#myid").load(location.href + " #countid"); // this will run after every 2 seconds
                //     //clearInterval(timeisup);
                //       }, 2000);
                     
                //       });
                </script>
           
              @else
              <i class="material-icons">notifications</i>
              @endif
              <p class="d-lg-none d-md-block">
                Nothing Pending!
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" style="background-color:cornflowerblue" href="/readnotify"> Mark All as Read</a>
              @if(auth()->user()->user_type=='admin')
              @foreach (auth()->user()->unreadNotifications as $notification)
               {{-- <a class="dropdown-item activeNotify" href="/testpage/{{ $notification->data['appeal_id'] }}">{{$notification->data['data']}}</a> --}}
               <form action="" id="{{ $notification->data['appeal_id'] }}" name="myform" method="post">
                @csrf
                <input type="hidden" value="{{ $notification->data['appeal_id'] }}" name="appsid">
               <button type="submit" class="dropdown-item" style="cursor: pointer;width:96%" name="submit" id="activeNotify">{{ $notification->data['data'] }}</button>
               </form>              
                
               
                @endforeach
              @elseif(auth()->user()->user_type=='user')
              @foreach (auth()->user()->unreadNotifications as $notification)
              <a href="#" data-toggle="modal" data-target="#notification_edit_appeal"  data-id="{{ $notification->data['appeal_id'] }}" class="dropdown-item notification_edit_appeal">{{$notification->data['data']}}</a>
              {{-- <a class="dropdown-item" href="{{url('prisonDashboard')}}" id="{{ $notification->data['appeal_id'] }}">{{$notification->data['data']}}</a> --}}
              
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
                            <a class="nav-link" href="{{ route('login') }}">{{ __('labels.login') }}</a>
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
  