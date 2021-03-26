    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span> Post</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('post.index')}}">All Post</a></li>
                            <li><a href="{{route('post-category.index')}}">Category</a></li>
                            <li><a href="{{route('tag.index')}}">Tag</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                    </li>


                      </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
