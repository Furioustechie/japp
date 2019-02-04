<ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard">
            <span class="sr-only"></span>
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        @can('isUser')
        <li class="nav-item">
          <a class="nav-link" href="appealForm">
            <i class="material-icons">content_paste</i>
            <p>Appeal Now</p>
          </a>
        </li>
        @endcan
        <li class="nav-item ">
            <a class="nav-link" href="appeals">
              <i class="material-icons">person</i>
              <p>Appeal List</p>
            </a>
          </li>
        
      

       @can('isAdmin')
        <li class="nav-item ">
          <a class="nav-link" href="editsettings">
            <i class="material-icons">settings_applications</i>
            <p>Settings</p>
          </a>
        </li>
        @endcan
        <li class="nav-item ">
          <a class="nav-link" href="testpage">
            <i class="material-icons">location_ons</i>
            <p>Test Page</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
        </ul>

        <script>
          var url = window.location;
          $('ul.nav a').filter(function () {
             return this.href == url;
          }).parents('li').addClass('active');
          
          </script>
          
          