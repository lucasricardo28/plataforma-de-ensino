<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap d-none">Administração </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fas fa-user-graduate"></i>
                        <span class="hide-menu">Estudante </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{route('students.index')}}" aria-expanded="false">
                                Estudante
                            </a>
                        </li>
                        <li>
                            <a href="{{route('courses.index')}}" aria-expanded="false">
                                Cursos
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>