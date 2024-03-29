 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4"
     style="background-image: linear-gradient(0deg, #000041 0%, rgb(255 36 77 / 74%) 100%);">
     <!-- Brand Logo -->
     <a href="{{ route('admin.home') }}" class="brand-link border-bottom border-light">
         <img src="{{ $setting && $setting->app_logo ? $setting->app_logo : $noPreviewPhoto }}" alt="Abdul Majid"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">{{ $setting ? $setting->app_name : config('app.name') }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item has-treeview">
                     <a href="{{ route('admin.home') }}" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>

                 {{-- Profile --}}
                 <li class="nav-item">
                     <a href="{{ route('admin.profile') }}" class="nav-link">
                         <i class="nav-icon fa fa-user"></i>
                         <p>Profile</p>
                     </a>
                 </li>

                 {{-- Blog Categories --}}
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-layer-group"></i>
                         <p>
                             Blog Categories
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.blog-categories.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.blog-categories.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Category</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 {{-- Blog Posts --}}
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-plus-square"></i>
                         <p>
                             Blog Posts
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.blog-posts.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.blog-posts.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Post</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 {{-- Count total trash --}}
                 @php
                     $blogCategoryTrash = \App\Models\BlogCategory::onlyTrashed()->count();
                     $blogPostTrash = \App\Models\BlogPost::onlyTrashed()->count();
                 @endphp


                 {{-- Trash --}}
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-trash"></i>
                         <p>
                             Trash
                             <i class="fas fa-angle-left right"></i>
                             @if ($blogCategoryTrash + $blogPostTrash)
                                 <span
                                     class="badge badge-danger right">{{ $blogCategoryTrash + $blogPostTrash }}</span>
                             @endif
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.trash.blog.index', 'categories') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blog Categories
                                     @if ($blogCategoryTrash)
                                         <span class="badge badge-danger right">{{ $blogCategoryTrash }}</span>
                                     @endif
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.trash.blog.index', 'posts') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blog Posts
                                     @if ($blogPostTrash)
                                         <span class="badge badge-danger right">{{ $blogPostTrash }}</span>
                                     @endif
                                 </p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 {{-- Setting --}}
                 <li class="nav-item">
                     <a href="{{ route('admin.settings.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>Setting</p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
