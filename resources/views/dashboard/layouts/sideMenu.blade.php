<nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('dist/images/logo.svg')}}">
                    <span class="hidden xl:block text-white text-lg ml-3"> Almillat Quran </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{asset('/')}}" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>

                    </li>

                     <li>
                                        <a href="{{route('updateProfile')}}" class="side-menu ">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Update Profile</div>
                                        </a>
                                    </li>

                                     <li>
                                        <a href="{{route('changePassword')}}" class="side-menu ">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Change Password</div>
                                        </a>
                                    </li>

                                     <li>
                                        <a href="{{route('table')}}" class="side-menu ">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Table</div>
                                        </a>
                                    </li>


                </ul>
            </nav>
