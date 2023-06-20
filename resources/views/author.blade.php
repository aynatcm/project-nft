@extends('home')
@section('author')
    <div
        class="bg-[#313037] bg-opacity-70 flex justify-center m-auto gap-x-[225px] ml-[50px] mr-[50px] pl-[30px] pr-[30px] pt-[30px] mt-20 rounded-t-2xl">

        <div class="flex gap-x-[31px] w-[50%] justify-center items-start">
            <div class="rounded-2xl h-[293px]">
                <img src="{{asset('img/avatar.png')}}" alt="Image of author">
            </div>

            <div>
                <h5 class="text-white text-lg font-normal pb-1">Author Profile</h5>
                <h6 class="text-white font-bold text-4xl pb-2">{{$user->name}}</h6>
                <p class="text-white text-sm font-normal pb-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad
                    iste ipsum officiis deleniti asperiores sit.
                </p>
                <a href="#"
                   class="flex items-center gap-x-4 pl-5 pr-5 pt-2 pb-2 bg-[#EBEBEB] w-[190px] rounded-2xl text-[13px] text-[#7A798A]">DdzFFzCqrhshMSx....
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.60938 1.875H0.671875V16H11.4531V15.0625H1.60938V1.875Z" fill="#7A798A"/>
                        <path d="M11.5669 3.51561L9.8125 1.76123V3.51561H11.5669Z" fill="#7A798A"/>
                        <path
                            d="M11.9219 4.45312H8.875V1.40625C8.875 0.630844 8.24416 0 7.46875 0H2.54688V14.125H13.3281V5.85938C13.3281 5.08397 12.6973 4.45312 11.9219 4.45312Z"
                            fill="#7A798A"/>
                    </svg>

                </a>
            </div>

        </div>

        <div class="w-[50%] flex gap-x-[32px] items-start justify-end">

            <div class="flex gap-x-2.5 ">
                <span class="h-[40px] bg-white flex items-center p-2 rounded-xl justify-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.00195 12.0631C1.00312 17.0128 4.58036 21.2272 9.43895 22.0029V14.9709H6.90195V12.0631H9.44195V9.84957C9.32841 8.80069 9.68447 7.75534 10.4136 6.99704C11.1427 6.23874 12.1693 5.84608 13.215 5.92556C13.9655 5.93775 14.7141 6.00501 15.455 6.12679V8.60093H14.191C13.7558 8.54358 13.3183 8.68818 13.0017 8.994C12.6851 9.29981 12.5237 9.73374 12.563 10.1735V12.0631H15.334L14.891 14.9719H12.563V22.0029C17.8174 21.1674 21.502 16.3391 20.9475 11.0158C20.3929 5.6925 15.7932 1.73786 10.4808 2.01682C5.16831 2.29578 1.0028 6.71067 1.00195 12.0631Z"
                        fill="black"/>
                </svg>
            </span>

                <span class="h-[40px] bg-white flex items-center p-2 rounded-xl justify-center">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.6441 3.18054C18.5012 2.64436 19.1425 1.80009 19.4483 0.805353C18.6429 1.30541 17.7618 1.65766 16.8429 1.84687C15.569 0.436695 13.5505 0.093522 11.9155 1.00911C10.2804 1.9247 9.4335 3.87238 9.84798 5.76384C6.54901 5.59052 3.47544 3.95985 1.3921 1.27759C0.304847 3.23999 0.860458 5.74861 2.66182 7.01046C2.01043 6.98855 1.37348 6.804 0.804092 6.47219C0.804092 6.4902 0.804092 6.50821 0.804092 6.52622C0.804469 8.5704 2.18125 10.3312 4.09599 10.7363C3.49179 10.9083 2.85802 10.9337 2.24304 10.8104C2.78153 12.5585 4.32121 13.7561 6.07611 13.7919C4.62265 14.9856 2.82769 15.6329 0.980017 15.6298C0.65252 15.6303 0.32528 15.6106 0 15.5707C1.87627 16.8324 4.06002 17.5021 6.29028 17.4997C9.39311 17.522 12.375 16.242 14.569 13.946C16.763 11.6499 17.986 8.52947 17.9644 5.2826C17.9644 5.0965 17.9603 4.91141 17.952 4.72732C18.7556 4.11961 19.4491 3.36679 20 2.5042C19.2514 2.85144 18.4573 3.07941 17.6441 3.18054Z"
                        fill="black"/>
                </svg>
            </span>

                <span class="h-[40px] bg-white flex items-center p-2 rounded-xl justify-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.20933 7.35809V10.8365H14.1483C13.6887 13.0469 11.7644 14.317 9.20933 14.317C6.2333 14.2769 3.84224 11.9062 3.84224 8.9955C3.84224 6.08482 6.2333 3.7141 9.20933 3.67404C10.4464 3.67259 11.6453 4.09241 12.6003 4.8614L15.28 2.24074C12.2061 -0.402031 7.71692 -0.741943 4.26368 1.40661C0.810443 3.55516 -0.776892 7.6758 0.368424 11.5185C1.51374 15.3612 5.11645 18.0024 9.20933 18C13.8134 18 18 14.7252 18 8.995C17.9929 8.44328 17.9238 7.89401 17.7939 7.35708L9.20933 7.35809Z"
                        fill="black"/>
                </svg>
                </span>

                <span class="h-[40px] bg-white flex items-center p-2 rounded-xl justify-center">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18 0.5V12.3756L13.304 17.1249H9.391L6.954 19.5H3.913V17.1249H0V3.66616L1.227 0.5H18ZM16.435 2.08308H3.13V13.9587H6.26V16.3328L8.609 13.9577H13.304L16.434 10.7915V2.08308H16.435ZM13.305 5.24924V9.99949H11.739V5.25025H13.304L13.305 5.24924ZM9.391 5.24924V9.99949H7.826V5.25025H9.391V5.24924Z"
                        fill="black"/>
                </svg>
            </span>
            </div>

            {{--            @unless(auth()->user()->name === $user->name)--}}


            {{--                @if($user->isFollowing(auth()->user()))--}}
            {{--                    <form action="{{route('followers.destroy',$user)}}" method="post">--}}
            {{--                        @csrf--}}
            {{--                        @method('DELETE')--}}
            {{--                        <button--}}
            {{--                            class="h-[40px] flex items-center justify-center p-4 border-white border-2 rounded-2xl text-white">--}}
            {{--                            Unfollow--}}
            {{--                        </button>--}}
            {{--                    </form>--}}

            {{--                @else--}}
            {{--                    <form action="{{route('followers.store',$user)}}" method="post">--}}
            {{--                        @csrf--}}
            {{--                        <button--}}
            {{--                            class="h-[40px] flex items-center justify-center p-4 border-white border-2 rounded-2xl text-white">--}}
            {{--                            Follow--}}
            {{--                        </button>--}}
            {{--                    </form>--}}
            {{--                @endif--}}

            {{--            @endunless--}}

            @auth()
                @unless(auth()->user()->name === $user->name)

                    @if($user->isFollowing(auth()->user()))
                        <form action="{{route('followers.destroy',$user)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="h-[40px] flex items-center justify-center p-4 border-white border-2 rounded-2xl text-white">
                                Unfollow
                            </button>
                        </form>

                    @else
                        <form action="{{route('followers.store',$user)}}" method="post">
                            @csrf
                            <button
                                class="h-[40px] flex items-center justify-center p-4 border-white border-2 rounded-2xl text-white">
                                Follow
                            </button>
                        </form>
                    @endif

                @endunless
            @endauth


        </div>
    </div>

    <div class="bg-[#343444] mb-14 rounded-t-none rounded-b-2xl ml-[50px] mr-[50px] pl-[30px] pr-[30px]">
        <ul class="flex justify-center gap-x-[135px] pt-[24px] pb-[24px]">
            <li class="list-item cursor-pointer">ALL</li>
            <li class="list-item cursor-pointer">ART</li>
            <li class="list-item cursor-pointer">MUSIC</li>
            <li class="list-item cursor-pointer">COLLECTIBLES</li>
            <li class="list-item cursor-pointer">SPORT</li>
        </ul>
    </div>

    <div>
        <x-card :items="$item" :user="$user"></x-card>
    </div>

@endsection
