<nav class="side-nav">
                  <?php
                   $image=\App\Models\logo::all()->pluck('image')->first();
                   ?>
	<a href="{{route('dashboard')}}" class="intro-x flex items-center pl-5 pt-4"> <img alt="Midone - HTML Admin Template" class="w-6" src="{{'upload/logo/'.$image}}"> <span class="hidden xl:block text-white text-lg ml-3"> Almillat Quran </span> </a>
	<div class="side-nav__devider my-6"></div>
	<ul>
		<li>

			<a href="{{route('dashboard')}}" class="side-menu side-menu--active">
				<div class="side-menu__icon"> <i data-lucide="home"></i> </div>
				<div class="side-menu__title"> Dashboard
					<div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
				</div>
			</a>
		</li>
		<li>
			<a href="javascript:;" class="side-menu">
				<div class="side-menu__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="box" data-lucide="box" class="lucide lucide-box">
						<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
						<polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
						<line x1="12" y1="22.08" x2="12" y2="12"></line>
					</svg>
				</div>
				<div class="side-menu__title"> Setting
					<div class="side-menu__sub-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
							<polyline points="6 9 12 15 18 9"></polyline>
						</svg>
					</div>
				</div>
			</a>
			<ul class="" style="display: none;">
				<li>
					<a href="{{route('get-profile')}}" class="side-menu">
						<div class="side-menu__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="activity" data-lucide="activity" class="lucide lucide-activity">
								<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
							</svg>
						</div>
						<div class="side-menu__title"> Update Profile </div>
					</a>
				</li>
				<li>
					<a href="{{route('changePassword')}}" class="side-menu">
						<div class="side-menu__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="activity" data-lucide="activity" class="lucide lucide-activity">
								<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
							</svg>
						</div>
						<div class="side-menu__title"> Change Password </div>
					</a>
				</li>
				<li>
					<a href="{{route('logo-index')}}" class="side-menu">
						<div class="side-menu__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="activity" data-lucide="activity" class="lucide lucide-activity">
								<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
							</svg>
						</div>
						<div class="side-menu__title"> Logo </div>
					</a>
				</li>
			</ul>
		</li>
        <li>
                        <a href="javascript:;" class="side-menu side-menu--open">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="box" data-lucide="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> </div>
                            <div class="side-menu__title">
                                Seo Tags
                                <div class="side-menu__sub-icon transform rotate-180"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open" style="display: block;">
                            <li>
                                <a href="{{route('tag-index')}}" class="side-menu">
                                    <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="activity" data-lucide="activity" class="lucide lucide-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg> </div>
                                    <div class="side-menu__title">Show Tags</div>
                                </a>
                            </li>

                        </ul>
                    </li>
		<li>
			<a href="{{ route('permissions.index') }}" class="side-menu ">
				<div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
				<div class="side-menu__title">Permission</div>
			</a>  </li>

			<a href="{{ route('users.index') }}" class="side-menu ">
				<div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
				<div class="side-menu__title">User</div>
			</a> </li>
		<li>
			<a href="{{ route('roles.index') }}" class="side-menu ">
				<div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
				<div class="side-menu__title">Role</div>
			</a> </li>
	</ul>
</nav>
