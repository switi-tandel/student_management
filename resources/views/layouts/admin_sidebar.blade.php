<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{route('home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('students.index') }}">
                <i class="bi bi-person"></i>
                <span>Students</span>
            </a>
        </li>

        <li class="nav-item">
    <a class="nav-link" href="{{ route('teachers.index') }}">
        <i class="bi bi-person"></i>
        <span>Teachers</span>
    </a>
</li>
        <!-- Add more sidebar items as needed -->

    </ul>

</aside><!-- End Sidebar-->
