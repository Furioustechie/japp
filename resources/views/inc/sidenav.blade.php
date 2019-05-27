<ul class="nav">
    @can('isAdmin')
        <li class="nav-item">
          <a class="nav-link" href="dashboard">
            <span class="sr-only"></span>
            <i class="material-icons">dashboard</i>
            <p>{{ __('labels.navbar_hcview') }}</p>
          </a>
        </li>
        @endcan
        @can('isNothing')
        <li class="nav-item">
          <a class="nav-link" href="appealForm">
            <i class="material-icons">content_paste</i>
            <p>Appeal Now</p>
          </a>
        </li>
        @endcan
        @can('isNothing')
        <li class="nav-item ">
            <a class="nav-link" href="appeals">
              <i class="material-icons">person</i>
              <p>Appeal List</p>
            </a>
          </li>
          @endcan
          @can('isAdmin')
          <li class="nav-item ">
            <a class="nav-link" href="hcDetails">
              <i class="material-icons">person</i>
              <p>{{ __('labels.navbar_appealDetails') }}</p>
            </a>
          </li>
          @endcan

       @can('isAdmin')
        <li class="nav-item ">
          <a class="nav-link" href="editsettings">
            <i class="material-icons">settings_applications</i>
            <p>{{ __('labels.navbar_settings') }}</p>
          </a>
        </li>
        @endcan
        @can('isAdmin')
        <li class="nav-item ">
          <a class="nav-link" href="stats">
            <i class="material-icons">insert_chart_outlined</i>
            <p>{{ __('labels.navbar_stats') }}</p>
          </a>
        </li>
        @endcan
        @can('isNothing')
        <li class="nav-item ">
          <a class="nav-link" href="testpage">
            <i class="material-icons">location_ons</i>
            <p>Test Page</p>
          </a>
        </li>
        @endcan
        @can('isUser')
        <li class="nav-item ">
          <a class="nav-link" href="/prisonDashboard">
            <i class="material-icons">notifications</i>
            <p>{{ __('labels.navbar_prisonView') }}</p>
          </a>
        </li>
        @endcan
        </ul>

        <script>
          var url = window.location;
          $('ul.nav a').filter(function () {
             return this.href == url;
          }).parents('li').addClass('active');
          
          </script>
          
          