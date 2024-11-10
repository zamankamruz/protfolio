

<style>
    .sidebar-menu .active {
    color: #007bff; /* Color for active links */
    font-weight: bold;
    background-color: #f0f8ff; /* Optional background for active link */
}
</style>



<div class="page-sidebar">
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <div class="sidebar-accordion-menu">
                <ul class="sidebar-menu list-unstyled">

                    <li>
                        <a href="{{ route('dashboard') }}" class="waves-effect waves-grey {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.hear') }}" class="waves-effect waves-grey {{ request()->routeIs('admin.hear') ? 'active' : '' }}">
                            <i class="fas fa-edit"></i> Hear
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-grey {{ request()->routeIs('admin.information', 'admin.skill', 'admin.experience', 'admin.education') ? 'active' : '' }}">
                            <i class="fas fa-info-circle"></i> About <i class="fas fa-chevron-right sub-arrow"></i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('admin.information') }}" class="{{ request()->routeIs('admin.information') ? 'active' : '' }}">Add Information</a></li>
                            <li><a href="{{ route('admin.skill') }}" class="{{ request()->routeIs('admin.skill') ? 'active' : '' }}">Add Skill</a></li>
                            <li><a href="{{ route('admin.experience') }}" class="{{ request()->routeIs('admin.experience') ? 'active' : '' }}">Add Experience</a></li>
                            <li><a href="{{ route('admin.education') }}" class="{{ request()->routeIs('admin.education') ? 'active' : '' }}">Add Education</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-grey {{ request()->routeIs('admin.add_service', 'admin.list_service') ? 'active' : '' }}">
                            <i class="fas fa-concierge-bell"></i> Service <i class="fas fa-chevron-right sub-arrow"></i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('admin.add_service') }}" class="{{ request()->routeIs('admin.add_service') ? 'active' : '' }}">Add Service</a></li>
                            <li><a href="{{ route('admin.list_service') }}" class="{{ request()->routeIs('admin.list_service') ? 'active' : '' }}">List Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.achivement') }}" class="waves-effect waves-grey {{ request()->routeIs('admin.achivement') ? 'active' : '' }}">
                            <i class="fas fa-trophy"></i> Achievement
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-grey {{ request()->routeIs('admin.add_work', 'admin.list_work') ? 'active' : '' }}">
                            <i class="fas fa-briefcase"></i> Work <i class="fas fa-chevron-right sub-arrow"></i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('admin.add_work') }}" class="{{ request()->routeIs('admin.add_work') ? 'active' : '' }}">Add Work</a></li>
                            <li><a href="{{ route('admin.list_work') }}" class="{{ request()->routeIs('admin.list_work') ? 'active' : '' }}">List Work</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-grey {{ request()->routeIs('admin.add_plan', 'admin.list_plan') ? 'active' : '' }}">
                            <i class="fas fa-tasks"></i> Your Plan <i class="fas fa-chevron-right sub-arrow"></i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('admin.add_plan') }}" class="{{ request()->routeIs('admin.add_plan') ? 'active' : '' }}">Add Plan</a></li>
                            <li><a href="{{ route('admin.list_plan') }}" class="{{ request()->routeIs('admin.list_plan') ? 'active' : '' }}">List Plan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-grey {{ request()->routeIs('admin.add_testimonial', 'admin.list_testimonial') ? 'active' : '' }}">
                            <i class="fas fa-comment-alt"></i> Testimonial <i class="fas fa-chevron-right sub-arrow"></i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('admin.add_testimonial') }}" class="{{ request()->routeIs('admin.add_testimonial') ? 'active' : '' }}">Add Testimonial</a></li>
                            <li><a href="{{ route('admin.list_testimonial') }}" class="{{ request()->routeIs('admin.list_testimonial') ? 'active' : '' }}">List Testimonial</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact') }}" class="waves-effect waves-grey {{ request()->routeIs('admin.contact') ? 'active' : '' }}">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{ route('logout') }}" class="waves-effect waves-grey"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <p class="copyright">Stacks ©</p>
            <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
        </div>
    </div>
</div>
