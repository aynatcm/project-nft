@extends('home')
@section('create')
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    @endpush


    <div class="flex items-start justify-between pt-20 pb-20">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <h4 class="text-white text-xl font-bold pb-5 self-center pr-[23%]">Preview item</h4>
            <x-card></x-card>
        </div>

        <div class="w-1/2 flex flex-col items-center justify-center p-2">
            <span for="file" class="text-white block pb-5 text-left w-full">Upload File</span>

            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data" id="dropzone"
                  class="dropzone border-[#343444] border-2 p-4 rounded w-full mb-6 text-white">
                @csrf
            </form>

            <form action="{{route('create')}}" method="post" enctype="multipart/form-data" class="text-white" >
                @csrf
                {{--                <label for="file" class="text-white block pb-5">Upload File</label>--}}
                {{--                <input name="file" type="file" accept=".png,.jpg,.gif,.webp,.mp4" id="file"--}}
                {{--                       class="border-[#343444] border-2 p-4 rounded w-full mb-6">--}}

                <label for="method" class="text-white block pb-5">
                    Select Method
                </label>
                <div
                    class="border-blue border-2 p-2 mb-6 w-[320px] bg-white text-[#5142FC] text-center flex justify-center items-center gap-x-1.5 rounded"
                    id="method">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.74736 16.3068C8.30569 16.3084 7.88069 16.1318 7.56903 15.8184L1.0382 9.28926C0.867923 9.11955 0.736523 8.9149 0.653074 8.68944C0.569625 8.46398 0.536116 8.2231 0.554862 7.98342L0.971528 2.51176C1.00031 2.11341 1.17197 1.73885 1.45491 1.45697C1.73786 1.1751 2.11307 1.00487 2.51153 0.977591L7.98319 0.560924C8.02653 0.551758 8.06903 0.551758 8.11236 0.551758C8.55403 0.551758 8.97653 0.726758 9.28736 1.04009L15.819 7.56842C15.9739 7.7232 16.0967 7.90696 16.1805 8.10921C16.2643 8.31147 16.3074 8.52825 16.3074 8.74717C16.3074 8.9661 16.2643 9.18288 16.1805 9.38514C16.0967 9.58739 15.9739 9.77115 15.819 9.92592L9.92569 15.8184C9.77132 15.9737 9.5877 16.0968 9.38544 16.1806C9.18318 16.2644 8.9663 16.3073 8.74736 16.3068ZM5.21153 3.54509C4.93745 3.54517 4.66763 3.61284 4.42595 3.7421C4.18427 3.87136 3.9782 4.05823 3.82599 4.28616C3.67378 4.51408 3.58013 4.77602 3.55333 5.04879C3.52653 5.32155 3.56741 5.59671 3.67235 5.8499C3.77729 6.10309 3.94305 6.32649 4.15494 6.50032C4.36684 6.67415 4.61834 6.79304 4.88716 6.84646C5.15598 6.89988 5.43382 6.88618 5.69608 6.80658C5.95834 6.72697 6.19692 6.58392 6.3907 6.39009L6.39653 6.38509L6.40236 6.37926L6.39569 6.38509C6.62735 6.1514 6.78464 5.85436 6.84775 5.53141C6.91086 5.20846 6.87697 4.87406 6.75033 4.57035C6.62369 4.26664 6.40999 4.00721 6.13615 3.82475C5.86231 3.6423 5.54058 3.54499 5.21153 3.54509Z"
                            fill="#5142FC"/>
                    </svg>
                    Fixed Price
                </div>

                <label for="price" class="text-white block pb-5">Price</label>
                <input name="price" type="text" id="price"
                       class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6"
                       placeholder="Enter price for one item (ETH)">
                @error('price')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <label for="title" class="text-white block pb-5">Title</label>
                <input name="title" type="text" id="title" onkeyup="getValue()" onchange="getValue()" minlength="4" maxlength="35"
                       class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6"
                       placeholder="Item Name">
                @error('title')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <label for="description" class="text-white block pb-5">Description</label>
                <textarea name="description" id="description"
                          class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6 resize-none"
                          placeholder="Enter price for one item (ETH)"></textarea>
                @error('description')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <div class="flex gap-x-4 flex-wrap">
                    <div class="w-[31.5%]">
                        <label for="royalties" class="text-white block pb-5">Royalties</label>
                        <input name="royalties" type="number" id="royalties"
                               class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6 resize-none"
                               placeholder="5%">
                        @error('royalties')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-[31.5%]">
                        <label for="size" class="text-white block pb-5">Size</label>
                        <input name="size" type="number" id="size"
                               class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6 resize-none"
                               placeholder="Size">
                        @error('size')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    {{--                    <div class="w-[31.5%]">--}}
                    {{--                        <label for="collection" class="text-white block pb-5">Collection</label>--}}
                    {{--                        <select name="collection" id="collection"--}}
                    {{--                                class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6 resize-none">--}}
                    {{--                            <option value="Abstraction">Abstraction</option>--}}
                    {{--                            <option value="Art">Patternlicious</option>--}}
                    {{--                            <option value="Art">Skecthify</option>--}}
                    {{--                            <option value="Art">Cartoonism</option>--}}
                    {{--                            <option value="Art">Virtuland</option>--}}
                    {{--                            <option value="Art">Virtuland</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}

                    <div class="w-[31.5%]">
                        <label class="collection text-white block pb-5">Collection
                        </label>
                        <select
                            class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6 resize-none"
                            name="collection_id" id="">
                            @foreach($collections as $collection)
                                <option value="{{$collection->id}}">{{$collection->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <label for="collection" class="text-white block pb-5">Categories</label>
                        <select name="category_id" id="collection"
                                class="border-[#343444] border-2 rounded p-4 text-gray-400 bg-transparent w-full mb-6">

                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <input name="img_item" value="{{old('img_item')}}" type="hidden">
                    @error('img_item')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-[#5142FC] text-white text-[15px] font-bold py-3 rounded-xl px-10 mt-5">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
