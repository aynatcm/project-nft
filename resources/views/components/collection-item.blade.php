@foreach($collection as $collect)
    <div class="gallery flex w-[355px] flex-col bg-[#343444] p-3 gap-1 rounded-[10px]">
        <div class="grid grid-cols-3 gap-1 w-full">
            {{--{{dd($imgCollection)->toArray()}}--}}

            @foreach($collect->items as $item)
                <img src="{{asset('uploads'.'/'.$item->img_item)}}" alt="">
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
                        <span
                            class="font-bold text-[14px] text-white">
                            {{$collect->user->name}}
                        </span>
                    </span>
                </div>
            </div>


            <div class="flex gap-x-[10px] w-[30%] justify-end">
                <div class="w-16 h-16 rounded-3xl flex items-center">
                    <div class="wrapper_like ml-3">
                    <span
                        class="tracking-widest bg-[#14141F] py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                        <img src="{{asset('img/heart.svg')}}" alt="" class="like_img fill-white">
                            <span class="count">0</span>
                    </span>
                    </div>

                </div>
            </div>

        </div>


    </div>

@endforeach
