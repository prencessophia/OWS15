<button id="sidebtn" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
    type="button"
    class="z-50 left-3 top-3 fixed bg-white inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>www
    </svg>
</button>

<aside id="logo-sidebar"
    class=" fixed top-0 left-0 mt-15 z-40 w-60 transition-transform -translate-x-full md:translate-x-0"
    aria-label="Sidebar" style="height: 96vh">
    <div class="h-full rounded-lg m-3 mr-0 shadow-lg bg-red-800 px-3 py-4 overflow-y-auto  ">
        <div class="flex flex-col justify-center items-center mt-9 pb-6">
            <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('images/ows_logo.png') }}" class="h-10  sm:h-16" />
            </a>
        </div>
        <ul class="space-y-2 text-gray-100 font-medium mt-9">
            <li
                class="rounded-lg {{ request()->routeIs('admin_dashboard', 'admin.manage', 'admin.create') ? 'bg-red-900 border-r-4 border-yellow-500' : '' }}">
                <a href="{{ route('admin_dashboard') }}" class="@include('partials.__admin_sidenav_class_attrib')">
                    <span class="material-symbols-rounded">dashboard</span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li
                class="rounded-lg {{ request()->routeIs('admin_offices') ? 'bg-red-900 border-r-4 border-yellow-500' : '' }}">
                <a href="{{ route('admin_offices') }}" class="@include('partials.__admin_sidenav_class_attrib')">
                    <span class="material-symbols-rounded">meeting_room</span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Offices</span>
                </a>
            </li>
            <li
                class="rounded-lg {{ request()->routeIs('admin_clearance') ? 'bg-red-900 border-r-4 border-yellow-500' : '' }}">
                <a href="{{ route('admin_clearance') }}" class="@include('partials.__admin_sidenav_class_attrib')">
                    <span class="material-symbols-rounded">clear_all</span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Clearance</span>
                </a>
            </li>
            <li
                class="rounded-lg {{ request()->routeIs('admin_stud_events','admin_create_event','admin_event_details') ? 'bg-red-900 border-r-4 border-yellow-500' : '' }}">
                <a href="{{ route('admin_stud_events') }}" class="@include('partials.__admin_sidenav_class_attrib')">
                    <span class="material-symbols-rounded">local_activity</span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Student Events</span>
                </a>
            </li>
            <li
                class="rounded-lg {{ request()->routeIs('admin_scholarship','admin_create_scholarship','admin_scholarship_details','admin_scholarship_editpage','admin_archived_scholarships','admin_scholarship_grantees') ? 'bg-red-900 border-r-4 border-yellow-500' : '' }}">
                <a href="{{ route('admin_scholarship') }}" class="@include('partials.__admin_sidenav_class_attrib')">
                    <span class="material-symbols-rounded">school</span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Scholarship</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
