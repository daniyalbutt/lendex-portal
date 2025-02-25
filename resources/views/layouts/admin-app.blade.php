<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
	<link href="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/flaticon_codebyte.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css" integrity="sha512-K0/1AQCY3Ueo90Xbwxoyo70O26FSaNZgnXLLBpXZc/Id+nZEzhE0JZvy9KUJci3jDuqCstr4/wxTIqfoxYeMBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loading-wave">
			<div class="loading-bar"></div>
			<div class="loading-bar"></div>
			<div class="loading-bar"></div>
			<div class="loading-bar"></div>
		</div>
	</div>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show">
        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="{{ route('home') }}" class="brand-logo">
				<img src="{{ asset('images/favicon.png') }}" alt="" style="filter: invert(1);width: 35px;">
				<div class="brand-title">
					{{ config('app.name', 'Laravel') }}
				</div>
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<ul class="navbar-nav header-left">
								<li class="nav-item dropdown notification_dropdown">
									<button class="ic-theme-mode" type="button">
										<span class="light">Light</span>
										<span class="dark">Dark</span>
									</button>
								</li>
							</ul>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown me-3">
								<a class="nav-link-2 text-black" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.83342 14.1667V13.6667H5.83341L5.83342 14.1667ZM14.1667 14.1667V13.6667V14.1667ZM4.50008 14.1667L4.50008 14.6667L4.50008 14.1667ZM15.5001 14.1667V13.6667V14.1667ZM6.33342 7.50001C6.33342 5.47496 7.97504 3.83334 10.0001 3.83334V2.83334C7.42275 2.83334 5.33342 4.92268 5.33342 7.50001H6.33342ZM6.33342 9.90574V7.50001H5.33342V9.90574H6.33342ZM4.66675 13.8333C4.66675 13.2218 4.88566 12.6628 5.24994 12.2283L4.48365 11.5858C3.97403 12.1936 3.66675 12.9782 3.66675 13.8333H4.66675ZM5.83341 13.6667L4.50008 13.6667L4.50008 14.6667L5.83342 14.6667L5.83341 13.6667ZM14.1667 13.6667H5.83342V14.6667H14.1667V13.6667ZM15.5001 13.6667L14.1667 13.6667V14.6667L15.5001 14.6667V13.6667ZM14.7502 12.2283C15.1145 12.6628 15.3334 13.2218 15.3334 13.8333H16.3334C16.3334 12.9782 16.0261 12.1936 15.5165 11.5858L14.7502 12.2283ZM13.6667 7.50001V9.90574H14.6667V7.50001H13.6667ZM10.0001 3.83334C12.0251 3.83334 13.6667 5.47497 13.6667 7.50001H14.6667C14.6667 4.92268 12.5774 2.83334 10.0001 2.83334V3.83334ZM15.5165 11.5858C15.0228 10.997 14.6667 10.464 14.6667 9.90574H13.6667C13.6667 10.8661 14.2682 11.6534 14.7502 12.2283L15.5165 11.5858ZM3.66675 13.8333C3.66675 14.2936 4.03984 14.6667 4.50008 14.6667L4.50008 13.6667C4.59213 13.6667 4.66675 13.7413 4.66675 13.8333H3.66675ZM15.5001 14.6667C15.9603 14.6667 16.3334 14.2936 16.3334 13.8333H15.3334C15.3334 13.7413 15.408 13.6667 15.5001 13.6667V14.6667ZM5.33342 9.90574C5.33342 10.464 4.97733 10.997 4.48365 11.5858L5.24994 12.2283C5.73194 11.6534 6.33342 10.8661 6.33342 9.90574H5.33342Z" fill="black"/>
									<path d="M11.4979 16.5639C11.3593 16.8482 11.1426 17.0871 10.8732 17.2529C10.6039 17.4186 10.2929 17.5042 9.97665 17.4998C9.66041 17.4954 9.35196 17.4011 9.08731 17.2279C8.82267 17.0548 8.61276 16.8099 8.48211 16.5218" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M10 2.5V3.33333" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<span class="badge text-white bg-secondary">27</span>	
									Notification
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_Notification1" class="widget-media ic-scroll p-3"
										style="height:380px;">
										<ul class="timeline">
											@foreach (auth()->user()->unreadNotifications as $notification)
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-{{ $notification->data['status'] }}">
														<img src="{{ asset($notification->data['image']) }}" alt="" width="25">
													</div>
													<div class="media-body">
														<h6 class="mb-1">{{ $notification->data['title'] }}</h6>
														<small class="d-block">{{ date('d M Y - h:i A', strtotime($notification->created_at)) }}</small>
													</div>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0);">See all notifications <i
											class="ti-arrow-end"></i></a>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen" href="javascript:void(0);">
									<svg width="28" height="28" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_5_876)">
										<path d="M5.5 5.5L0.833334 0.833334M0.833334 0.833334L0.833334 5.5M0.833334 0.833334L5.5 0.833334" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M12.5 5.5L17.1667 0.833334M17.1667 0.833334L12.5 0.833334M17.1667 0.833334L17.1667 5.5" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M5.5 12.5L0.833334 17.1667M0.833334 17.1667L5.5 17.1667M0.833334 17.1667L0.833334 12.5" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M12.5 12.5L17.1667 17.1667M17.1667 17.1667L17.1667 12.5M17.1667 17.1667L12.5 17.1667" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
										<defs>
										<clipPath id="clip0_5_876">
										<rect width="18" height="18" fill="white"/>
										</clipPath>
										</defs>
									</svg>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell-link " href="javascript:void(0);">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.66675 8.16665L12.2001 13.8166C13.2667 14.6166 14.7334 14.6166 15.8001 13.8166L23.3334 8.1666" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
									<rect x="3.5" y="5.83334" width="21" height="16.3333" rx="2" stroke="black" stroke-linecap="round"/>
									</svg>
									<span class="badge text-white bg-secondary">27</span>
								</a>
							</li>
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="{{ asset('images/user.jpg') }}" width="20" alt>
									<div class="header-info ms-3">
										<span class="fs-14 font-w600 mb-0">{{ Auth::user()->name }}</span>
									</div>
									<svg class="ms-2 mt-1 h-line" width="12" height="10" viewBox="0 0 12 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<rect y="0.5" width="12" height="1" fill="white" />
										<rect y="4.5" width="12" height="1" fill="white" />
										<rect y="8.5" width="12" height="1" fill="white" />
									</svg>

								</a>
								<div class="profile-detail card">
									<div class="card-body p-0">
										<div class="d-flex profile-media justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<img src="{{ asset('images/user.jpg') }}" alt="img">
												<div class="ms-3">
													<h4 class="mb-0">{{ Auth::user()->name }}</h4>
													<p class="mb-0">{{ Auth::user()->email }}</p>
												</div>
											</div>
										</div>
										<div class="media-box">
											<ul class="d-flex flex-colunm gap-2 flex-wrap">
												<li>
													<a href="{{ route('profile') }}">
														<div class="icon-box-lg">
															<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5 20C5 11.7157 11.7157 5 20 5C28.2843 5 35 11.7157 35 20C35 28.2843 28.2843 35 20 35C11.7157 35 5 28.2843 5 20Z"
																	fill="white" fill-opacity="0.25" />
																<circle cx="19.9997" cy="16.6667" r="6.66667"
																	fill="white" />
																<path fill-rule="evenodd" clip-rule="evenodd"
																	d="M30.4335 30.5196C30.4904 30.6167 30.4727 30.7398 30.3915 30.8178C27.6957 33.4079 24.034 35 20.0004 35C15.9668 35 12.3051 33.4079 9.60933 30.8179C9.52818 30.7399 9.51048 30.6169 9.56735 30.5198C11.4843 27.2465 15.4363 25 20.0005 25C24.5645 25 28.5165 27.2464 30.4335 30.5196Z"
																	fill="white" />
															</svg>
															<p>Profile</p>
														</div>
													</a>
												</li>
												<li>
													<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
														<div class="icon-box-lg">
															<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.25"
																	d="M28.6325 11.2111L16.3162 7.10573C15.6687 6.88989 15 7.37186 15 8.05442V31.9462C15 32.6288 15.6687 33.1108 16.3162 32.8949L28.6325 28.7895C29.4491 28.5173 30 27.753 30 26.8921V13.1085C30 12.2476 29.4491 11.4834 28.6325 11.2111Z"
																	fill="white" />
																<path
																	d="M19.1663 15.833L23.333 19.9997M23.333 19.9997L19.1663 24.1663M23.333 19.9997H6.66634"
																	stroke="white" stroke-linecap="round" />
															</svg>
															<p>Logout</p>
														</div>
													</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
		<div class="ic-sidenav">
			<div class="ic-sidenav-scroll">
				<ul class="metismenu" id="menu">
					<li>
                        <a href="{{ route('home') }}" aria-expanded="false">
							<i class="flaticon-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					@canany(['product-list', 'product-create'])
					<li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-shopping-bag"></i>
							<span class="nav-text">Products</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ route('products.index') }}">All Products</a></li>
							@can('product-create')
							<li><a href="{{ route('products.create') }}">Create Product</a></li>
							@endcan
						</ul>
					</li>
					@endcanany
					@canany(['user-list', 'user-create'])
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-user"></i>
							<span class="nav-text">Users</span>
						</a>
						<ul aria-expanded="false">
							@can('user-list')
							<li><a href="{{ route('users.index') }}">All Users</a></li>
							@endcan
							@can('user-create')
							<li><a href="{{ route('users.create') }}">Create User</a></li>
							@endcan
						</ul>
					</li>
					@endcanany
					@canany(['page-list', 'page-create'])
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-cms"></i>
							<span class="nav-text">Pages</span>
						</a>
						<ul aria-expanded="false">
							@can('page-list')
							<li><a href="{{ route('pages.index') }}">All Pages</a></li>
							@endcan
							@can('page-create')
							<li><a href="{{ route('pages.create') }}">Create Page</a></li>
							@endcan
						</ul>
					</li>
					@endcanany

					@canany(['application-list', 'application-create'])
					<li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-document"></i>
							<span class="nav-text">Applications</span>
						</a>
						<ul aria-expanded="false">
							@can('application-list')
							<li><a href="{{ route('applications.index') }}">All Applications</a></li>
							@endcan
							@can('application-create')
							<li><a href="{{ route('applications.create') }}">Create Application</a></li>
							@endcan
						</ul>
					</li>
					@endcanany

					@can('user-doc-list')
					<li>
						<a href="{{ route('documents.index') }}" aria-expanded="false">
							<i class="flaticon-file"></i>
							<span class="nav-text">{{ Auth::user()->hasRole('User') ? 'Submit Your Documents' : 'Documents' }}</span>
						</a>
					</li>
					@endcan

					@can('track-your-application')
					<li>
						<a href="{{ route('track.your.application') }}" aria-expanded="false">
							<i class="flaticon-bar-chart"></i>
							<span class="nav-text">Track Your Application</span>
						</a>
					</li>
					@endcan

					@can('message-list')
					<li>
						<a href="{{ route('messages.index') }}" aria-expanded="false">
							<i class="flaticon-mail"></i>
							<span class="nav-text">Messages</span>
						</a>
					</li>
					@endcan

					@can('message-view')
					<li>
						<a href="{{ route('message.index') }}" aria-expanded="false">
							<i class="flaticon-mail"></i>
							<span class="nav-text">Message from Your Agent</span>
						</a>
					</li>
					@endcan

					@canany(['role-list', 'role-create'])
					<li class="menu-title">ROLES & PERMISSIONS</li>
					<li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-bar-chart"></i>

							<span class="nav-text">Roles</span>
						</a>
						<ul aria-expanded="false">
							@can('role-list')
							<li><a href="{{ route('roles.index') }}" aria-expanded="false">All Roles</a></li>
							@endcan
							@can('role-create')
                            <li><a href="{{ route('roles.create') }}" aria-expanded="false">Create Role</a></li>
							@endcan
						</ul>
					</li>
					@endcanany
					@canany(['permission-list', 'permission-create'])
					<li>
						<a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-app"></i>
							<span class="nav-text">Permissions</span>
						</a>
						<ul aria-expanded="false">
							@can('permission-list')
							<li><a href="{{ route('permissions.index') }}">All Permissions</a></li>
							@endcan
							@can('permission-create')
							<li><a href="{{ route('permissions.create') }}">Create Permission</a></li>
							@endcan
						</ul>
					</li>
					@endcanany
				</ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
                @yield('content')
			</div>
		</div>
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Developers</a> <span class="current-year">{{ date('Y') }}</span></p>
            </div>
        </div>
		<!--**********************************
            Footer end
        ***********************************-->
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.6/perfect-scrollbar.min.js" integrity="sha512-gcLXgodlQJWRXhAyvb5ULNlBAcvjuufaOBRggyLCtCqez+9jW7MxP3Is/9serId1YmNZ0Lx1ewh9z2xBwwZeKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js" integrity="sha512-o36qZrjup13zLM13tqxvZTaXMXs+5i4TL5UWaDCsmbp5qUcijtdCFuW9a/3qnHGfWzFHBAln8ODjf7AnUNebVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/global.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" integrity="sha512-foIijUdV0fR0Zew7vmw98E6mOWd9gkGWQBWaoA1EOFAx+pY+N8FmmtIYAVj64R98KeD2wzZh1aHK0JSpKmRH8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/ic-sidenav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
	@stack('scripts')
	<script>
		function submitForm(a){
			$(a).parent().submit();
		}
	</script>
</body>
</html>
