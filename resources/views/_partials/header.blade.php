<header class="bg-[#333340] {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-[#333340]'}}">
    <div class="border-b-2 h-[80px] border-[#8A8AA0] flex pt-4 pb-4 items-center justify-evenly">
        <div>
            <a href="{{route('home')}}">
                <svg width="133" height="56" viewBox="0 0 133 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M50.584 15.8H55.642L64.804 41H60.142L58.522 36.536H47.722L46.102 41H41.44L50.584 15.8ZM49.324 32.144H56.902L53.104 21.758L49.324 32.144ZM66.4009 41L72.9889 31.964L66.4549 22.982H71.8729L75.6889 28.22L79.5229 22.982H84.9409L78.4069 31.964L84.9949 41H79.5769L75.6889 35.672L71.8189 41H66.4009ZM87.7577 23H92.1497V41H87.7577V23ZM89.9717 20.318C89.3357 20.318 88.7957 20.108 88.3517 19.688C87.9077 19.256 87.6857 18.716 87.6857 18.068C87.6857 17.432 87.9077 16.898 88.3517 16.466C88.7957 16.034 89.3357 15.818 89.9717 15.818C90.6077 15.818 91.1417 16.034 91.5737 16.466C92.0177 16.898 92.2397 17.432 92.2397 18.068C92.2397 18.716 92.0177 19.256 91.5737 19.688C91.1417 20.108 90.6077 20.318 89.9717 20.318ZM106.084 41.468C104.428 41.468 102.916 41.042 101.548 40.19C100.192 39.338 99.1059 38.192 98.2899 36.752C97.4859 35.312 97.0839 33.722 97.0839 31.982C97.0839 30.674 97.3179 29.45 97.7859 28.31C98.2539 27.158 98.8959 26.15 99.7119 25.286C100.54 24.41 101.5 23.726 102.592 23.234C103.684 22.742 104.848 22.496 106.084 22.496C107.488 22.496 108.772 22.796 109.936 23.396C111.112 23.984 112.108 24.794 112.924 25.826C113.74 26.858 114.334 28.034 114.706 29.354C115.078 30.674 115.162 32.054 114.958 33.494H101.8C101.968 34.166 102.244 34.772 102.628 35.312C103.012 35.84 103.498 36.266 104.086 36.59C104.674 36.902 105.34 37.064 106.084 37.076C106.852 37.088 107.548 36.908 108.172 36.536C108.808 36.152 109.336 35.636 109.756 34.988L114.238 36.032C113.506 37.628 112.414 38.936 110.962 39.956C109.51 40.964 107.884 41.468 106.084 41.468ZM101.656 30.2H110.512C110.38 29.48 110.098 28.832 109.666 28.256C109.246 27.668 108.724 27.2 108.1 26.852C107.476 26.504 106.804 26.33 106.084 26.33C105.364 26.33 104.698 26.504 104.086 26.852C103.474 27.188 102.952 27.65 102.52 28.238C102.1 28.814 101.812 29.468 101.656 30.2ZM123.798 41.324C122.862 41.264 121.956 41.078 121.08 40.766C120.216 40.442 119.448 40.004 118.776 39.452C118.104 38.9 117.588 38.24 117.228 37.472L120.936 35.888C121.08 36.128 121.314 36.386 121.638 36.662C121.962 36.926 122.346 37.148 122.79 37.328C123.246 37.508 123.744 37.598 124.284 37.598C124.74 37.598 125.172 37.538 125.58 37.418C126 37.286 126.336 37.088 126.588 36.824C126.852 36.56 126.984 36.218 126.984 35.798C126.984 35.354 126.828 35.012 126.516 34.772C126.216 34.52 125.832 34.334 125.364 34.214C124.908 34.082 124.464 33.962 124.032 33.854C122.892 33.626 121.83 33.272 120.846 32.792C119.874 32.312 119.088 31.694 118.488 30.938C117.9 30.17 117.606 29.246 117.606 28.166C117.606 26.978 117.918 25.952 118.542 25.088C119.166 24.224 119.988 23.558 121.008 23.09C122.028 22.622 123.126 22.388 124.302 22.388C125.73 22.388 127.038 22.688 128.226 23.288C129.426 23.876 130.374 24.71 131.07 25.79L127.596 27.842C127.428 27.554 127.194 27.29 126.894 27.05C126.594 26.798 126.252 26.594 125.868 26.438C125.484 26.27 125.082 26.174 124.662 26.15C124.122 26.126 123.63 26.174 123.186 26.294C122.742 26.414 122.382 26.618 122.106 26.906C121.842 27.194 121.71 27.578 121.71 28.058C121.71 28.514 121.89 28.856 122.25 29.084C122.61 29.3 123.042 29.468 123.546 29.588C124.062 29.708 124.554 29.84 125.022 29.984C126.078 30.332 127.068 30.758 127.992 31.262C128.928 31.766 129.678 32.384 130.242 33.116C130.806 33.848 131.076 34.724 131.052 35.744C131.052 36.908 130.704 37.928 130.008 38.804C129.312 39.668 128.412 40.328 127.308 40.784C126.216 41.24 125.046 41.42 123.798 41.324Z"
                        fill="white"/>
                    <path
                        d="M18.75 4C10.2255 9.0344 11.25 23.2187 11.25 23.2187C11.25 23.2187 7.5 21.9375 7.5 16.1719C3.02601 18.831 0 23.9421 0 29.625C0 38.1164 6.71572 45 15 45C23.2843 45 30 38.1164 30 29.625C29.9999 17.1328 18.75 14.5703 18.75 4V4ZM16.3176 39.7023C13.3034 40.4725 10.2505 38.5924 9.49886 35.5027C8.74736 32.4131 10.5816 29.2838 13.596 28.5135C20.8732 26.6538 21.7852 22.4591 21.7852 22.4591C21.7852 22.4591 25.4141 37.3775 16.3176 39.7023V39.7023Z"
                        fill="url(#paint0_linear_504_1801)"/>
                    <defs>
                        <linearGradient id="paint0_linear_504_1801" x1="26.25" y1="4" x2="-5.52352" y2="35.3469"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E250E5"/>
                            <stop offset="1" stop-color="#4B50E6"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </div>
        <ul class="flex gap-x-10">
            @auth()
                <li><a href="#" class="list-item">Home</a></li>
                <li><a href="#" class="list-item">Explore</a></li>
                <li><a href="#" class="list-item">Activity</a></li>
                <li><a href="#" class="list-item">Community</a></li>
            @endauth

            @guest()
                <li><a href="#" class="list-item">Home</a></li>
                <li><a href="#" class="list-item">Explore</a></li>
                <li><a href="#" class="list-item">Activity</a></li>
                <li><a href="#" class="list-item">Community</a></li>
                <li><a href="{{route('login')}}" class="list-item">Login</a></li>
                <li><a href="{{route('register')}}" class="list-item">Register</a></li>
            @endguest

        </ul>

        <button class="list-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                    fill="white"/>
            </svg>
        </button>

        <div>
            @guest()
                <a href="#"
                   class="flex gap-x-2.5 items-center border-[#5142FC] px-[35px] py-[16px] border-2 rounded-3xl">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M14.8077 6.98483H18.3337C18.3337 4.15383 16.6374 2.5 13.7633 2.5H6.23736C3.36329 2.5 1.66699 4.15383 1.66699 6.94872V13.0513C1.66699 15.8462 3.36329 17.5 6.23736 17.5H13.7633C16.6374 17.5 18.3337 15.8462 18.3337 13.0513V12.7913H14.8077C13.1713 12.7913 11.8448 11.4979 11.8448 9.9025C11.8448 8.30707 13.1713 7.01372 14.8077 7.01372V6.98483ZM14.8077 8.22701H17.7114C18.0551 8.22701 18.3337 8.49861 18.3337 8.83365V10.9425C18.3297 11.2759 18.0534 11.5452 17.7114 11.5491H14.8744C14.046 11.56 13.3216 11.007 13.1337 10.2203C13.0396 9.73191 13.1717 9.22797 13.4946 8.84351C13.8174 8.45906 14.2981 8.2334 14.8077 8.22701ZM14.9337 10.4441H15.2077C15.5596 10.4441 15.8448 10.1661 15.8448 9.82306C15.8448 9.48004 15.5596 9.20197 15.2077 9.20197H14.9337C14.7654 9.20004 14.6033 9.26387 14.4837 9.3792C14.364 9.49453 14.2966 9.65177 14.2966 9.81584C14.2966 10.16 14.5806 10.4402 14.9337 10.4441ZM5.61513 6.98483H10.3188C10.6707 6.98483 10.9559 6.70676 10.9559 6.36375C10.9559 6.02073 10.6707 5.74266 10.3188 5.74266H5.61513C5.26618 5.74263 4.98215 6.01633 4.9781 6.35652C4.97807 6.70073 5.26211 6.98088 5.61513 6.98483Z"
                              fill="white"/>
                    </svg>
                    <span class="list-item">Wallet Connect</span>

                </a>
            @endguest

            @auth()
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="text-white flex items-center gap-x-2.5 px-9 py-3 border-[1px] border-[#5142FC] rounded-3xl text-[15px]">
                        Logout
                    </button>
                </form>
            @endauth

        </div>

    </div>

    @auth()
        <div
            class="h-full m-auto text-center flex flex-col items-center py-20 {{ request()->routeIs('home') ? 'hidden' : 'bg-[#333340]'}}">
            <h1 class="text-white font-bold text-5xl">{{Route::current()->getName()}}</h1>
            <span class="flex justify-center pt-3">
            <span class="text-[#8A8AA0] font-normal text-lg">Home / &nbsp;</span>
            <span class="text-[#8A8AA0] font-normal text-lg">Pages /</span>
            <span
                class="text-white font-normal text-lg">&nbsp; {{__("You are logged in" )}} <strong> {{ Auth::user()->name }} </strong></span>

        </span>
        </div>
    @endauth

</header>
