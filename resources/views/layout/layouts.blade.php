<!DOCTYPE html>
<!--
Template Name: Tinker - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
@include('layout.mainLayer.head');
<!-- END: Head -->
<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
<!-- BEGIN: Mobile Menu -->
@include('layout.mainLayer.mobile-menu');
<!-- END: Mobile Menu -->
<div class="flex overflow-hidden">
    <!-- BEGIN: Side Menu -->
@include('layout.mainLayer.side-menu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
{{--    <div class="content">--}}
{{--        --}}
{{--        <!-- BEGIN: Top Bar -->--}}
{{--        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">--}}
{{--            <!-- BEGIN: Breadcrumb -->--}}
{{--            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item"><a href="#">Application</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <!-- END: Breadcrumb -->--}}
{{--            <!-- BEGIN: Search -->--}}
{{--            <div class="intro-x relative mr-3 sm:mr-6">--}}
{{--                <div class="search hidden sm:block">--}}
{{--                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">--}}
{{--                    <i data-feather="search" class="search__icon dark:text-slate-500"></i>--}}
{{--                </div>--}}
{{--                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-slate-500"></i> </a>--}}
{{--                <div class="search-result">--}}
{{--                    <div class="search-result__content">--}}
{{--                        <div class="search-result__content__title">Pages</div>--}}
{{--                        <div class="mb-5">--}}
{{--                            <a href="" class="flex items-center">--}}
{{--                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>--}}
{{--                                <div class="ml-3">Mail Settings</div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>--}}
{{--                                <div class="ml-3">Users & Permissions</div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>--}}
{{--                                <div class="ml-3">Transactions Report</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="search-result__content__title">Users</div>--}}
{{--                        <div class="mb-5">--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 image-fit">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="ml-3">Robert De Niro</div>--}}
{{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 image-fit">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="ml-3">John Travolta</div>--}}
{{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johntravolta@left4code.com</div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 image-fit">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="ml-3">Kevin Spacey</div>--}}
{{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="flex items-center mt-2">--}}
{{--                                <div class="w-8 h-8 image-fit">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="ml-3">Al Pacino</div>--}}
{{--                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="search-result__content__title">Products</div>--}}
{{--                        <a href="" class="flex items-center mt-2">--}}
{{--                            <div class="w-8 h-8 image-fit">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-5.jpg">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">Oppo Find X2 Pro</div>--}}
{{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>--}}
{{--                        </a>--}}
{{--                        <a href="" class="flex items-center mt-2">--}}
{{--                            <div class="w-8 h-8 image-fit">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">Dell XPS 13</div>--}}
{{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>--}}
{{--                        </a>--}}
{{--                        <a href="" class="flex items-center mt-2">--}}
{{--                            <div class="w-8 h-8 image-fit">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">Apple MacBook Pro 13</div>--}}
{{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>--}}
{{--                        </a>--}}
{{--                        <a href="" class="flex items-center mt-2">--}}
{{--                            <div class="w-8 h-8 image-fit">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-2.jpg">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>--}}
{{--                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- END: Search -->--}}
{{--            <!-- BEGIN: Notifications -->--}}
{{--            <div class="intro-x dropdown mr-auto sm:mr-6">--}}
{{--                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="bell" class="notification__icon dark:text-slate-500"></i> </div>--}}
{{--                <div class="notification-content pt-2 dropdown-menu">--}}
{{--                    <div class="notification-content__box dropdown-content">--}}
{{--                        <div class="notification-content__title">Notifications</div>--}}
{{--                        <div class="cursor-pointer relative flex items-center ">--}}
{{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">--}}
{{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2 overflow-hidden">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>--}}
{{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
{{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">--}}
{{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2 overflow-hidden">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>--}}
{{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
{{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">--}}
{{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2 overflow-hidden">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>--}}
{{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
{{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">--}}
{{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2 overflow-hidden">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>--}}
{{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="cursor-pointer relative flex items-center mt-5">--}}
{{--                            <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                                <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">--}}
{{--                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2 overflow-hidden">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>--}}
{{--                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- END: Notifications -->--}}
{{--            <!-- BEGIN: Account Menu -->--}}
{{--            <div class="intro-x dropdown w-8 h-8">--}}
{{--                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">--}}
{{--                    <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">--}}
{{--                </div>--}}
{{--                <div class="dropdown-menu w-56">--}}
{{--                    <ul class="dropdown-content bg-primary text-white">--}}
{{--                        <li class="p-2">--}}
{{--                            <div class="font-medium">Robert De Niro</div>--}}
{{--                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">DevOps Engineer</div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider border-white/[0.08]">--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider border-white/[0.08]">--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- END: Account Menu -->--}}
{{--        </div>--}}
{{--        <!-- END: Top Bar -->--}}
{{--        <h2 class="intro-y text-lg font-medium mt-10">--}}
{{--            Data List Layout--}}
{{--        </h2>--}}
{{--        <div class="grid grid-cols-12 gap-6 mt-5">--}}
{{--            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">--}}
{{--                <button class="btn btn-primary shadow-md mr-2">Add New Product</button>--}}
{{--                <div class="dropdown">--}}
{{--                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">--}}
{{--                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu w-40">--}}
{{--                        <ul class="dropdown-content">--}}
{{--                            <li>--}}
{{--                                <a href="" class="dropdown-item"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>--}}
{{--                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">--}}
{{--                    <div class="w-56 relative text-slate-500">--}}
{{--                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">--}}
{{--                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- BEGIN: Data List -->--}}
{{--            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">--}}
{{--                <table class="table table-report -mt-2">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="whitespace-nowrap">IMAGES</th>--}}
{{--                        <th class="whitespace-nowrap">PRODUCT NAME</th>--}}
{{--                        <th class="text-center whitespace-nowrap">STOCK</th>--}}
{{--                        <th class="text-center whitespace-nowrap">STATUS</th>--}}
{{--                        <th class="text-center whitespace-nowrap">ACTIONS</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="Uploaded at 31 August 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 31 August 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 31 August 2022">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Oppo Find X2 Pro</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">112</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="Uploaded at 12 January 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 12 January 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 12 January 2022">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Apple MacBook Pro 13</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">115</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 16 February 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 16 February 2022">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 16 February 2022">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">57</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 29 June 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 29 June 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 29 June 2021">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">114</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 13 September 2020">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 13 September 2020">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 13 September 2020">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Samsung Galaxy S20 Ultra</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">79</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 10 September 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 10 September 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 10 September 2021">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">50</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 5 February 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 5 February 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 5 February 2021">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Nike Tanjun</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">200</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="Uploaded at 15 May 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 15 May 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 15 May 2021">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">50</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-danger"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr class="intro-x">--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="Uploaded at 4 September 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 4 September 2021">--}}
{{--                                </div>--}}
{{--                                <div class="w-10 h-10 image-fit zoom-in -ml-5">--}}
{{--                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="Uploaded at 4 September 2021">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="" class="font-medium whitespace-nowrap">Nike Air Max 270</a>--}}
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>--}}
{{--                        </td>--}}
{{--                        <td class="text-center">68</td>--}}
{{--                        <td class="w-40">--}}
{{--                            <div class="flex items-center justify-center text-danger"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-report__action w-56">--}}
{{--                            <div class="flex justify-center items-center">--}}
{{--                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>--}}
{{--                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <!-- END: Data List -->--}}
{{--            <!-- BEGIN: Pagination -->--}}
{{--            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">--}}
{{--                <nav class="w-full sm:w-auto sm:mr-auto">--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>--}}
{{--                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>--}}
{{--                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>--}}
{{--                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>--}}
{{--                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--                <select class="w-20 form-select box mt-3 sm:mt-0">--}}
{{--                    <option>10</option>--}}
{{--                    <option>25</option>--}}
{{--                    <option>35</option>--}}
{{--                    <option>50</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <!-- END: Pagination -->--}}
{{--        </div>--}}
{{--        <!-- BEGIN: Delete Confirmation Modal -->--}}
{{--        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-body p-0">--}}
{{--                        <div class="p-5 text-center">--}}
{{--                            <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>--}}
{{--                            <div class="text-3xl mt-5">Are you sure?</div>--}}
{{--                            <div class="text-slate-500 mt-2">--}}
{{--                                Do you really want to delete these records?--}}
{{--                                <br>--}}
{{--                                This process cannot be undone.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="px-5 pb-8 text-center">--}}
{{--                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>--}}
{{--                            <button type="button" class="btn btn-danger w-24">Delete</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- END: Delete Confirmation Modal -->--}}
{{--    </div>--}}
    <!-- END: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->

        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            <!-- BEGIN: Breadcrumb -->
            @yield('breadcrumb')

            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            @include('layout.mainLayer.search');
        </div>
        @yield('content')
    </div>
</div>


<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>
