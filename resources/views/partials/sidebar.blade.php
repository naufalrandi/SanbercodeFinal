<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href=" {{route('dashboard')}} " class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <li class="nav-header">Question</li>
        <li class="nav-item">
            <a href=" {{route('question.create')}} " class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Create Question
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href=" {{route('question.index')}} " class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Question
                </p>
            </a>
        </li>

        <li class="nav-header">Tag</li>
        <li class="nav-item">
            <a href=" {{route('tag.create')}} " class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Create Tag
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href=" {{route('tag.index')}} " class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Tag
                </p>
            </a>
        </li>

        <li class="nav-header">Logout</li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    {{ __('Logout') }}
                </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
