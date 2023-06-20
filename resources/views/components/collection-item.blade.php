@foreach($collection as $collect)
    <div class="gallery flex w-[355px] flex-col bg-[#343444] p-3 gap-1 rounded-[10px]">
        <div class="grid grid-cols-3 gap-2 w-full">
            {{--{{dd($imgCollection)->toArray()}}--}}

            @foreach($collect->items as $item)
                <img src="{{asset('uploads'.'/'.$item->img_item)}}" alt="image of a item" class="rounded-2xl">
            @endforeach
        </div>

        <div class="info flex items-center mt-4">

            <div class="flex items-center gap-x-[10px] w-[70%]">
                <div class="rounded-3xl bg-[#7A798A] p-1">
                    <img src="{{asset('uploads'.'/'.$collect->img_collection)}}" alt=""
                         class="object-cover rounded-3xl w-16 h-16">
                </div>

                <div class="flex flex-col w-1/2">
                    <h6 class="text-[18px] font-bold text-white">{{$collect->name}}</h6>
                    <span class="font-normal text-[13px] text-[#8A8AA0]">Created by
                        <a href="{{route('author',$collect->user->name)}}">
                            <span
                                class="font-bold text-[14px] text-white">
                                {{$collect->user->name}}
                            </span>
                        </a>
                    </span>
                </div>
            </div>


            <div class="flex gap-x-[10px] w-[30%] justify-end">
                <div class="w-16 h-16 rounded-3xl flex items-center">
                    <div class="wrapper_like ml-3">
                        @unless(request()->is('create'))
                            <form action="{{route('collections.collection.likes',$collect)}}" method="post">
                                @csrf
                                <button class="flex">
                                <span
                                    class="items-center tracking-widest bg-[#14141F] py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                         fill="white"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="like_img">
                <path
                    d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z"
                    fill="white"/>
            </svg>
                                <span class="count">{{$collect->likes->count()}}</span>

                                </span>


                                </button>
                            </form>
                        @endunless
                    </div>

                </div>
            </div>

        </div>


    </div>

@endforeach
