@extends('home')
@section('explore')
    <section class="mt-20 mb-20 flex">
        <form action="{{route('explore.filter')}}" method="post">
            @csrf
            <div class="ml-[50px] mr-[50px]">
                <div>
                    <h6 class="font-bold text-xl text-white pb-2.5 flex justify-between items-center">Categories
                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2902 0.309656C11.1977 0.216953 11.0878 0.143405 10.9668 0.0932235C10.8459 0.0430421 10.7162 0.0172119 10.5852 0.0172119C10.4543 0.0172119 10.3246 0.043042 10.2036 0.0932235C10.0826 0.143405 9.97274 0.216952 9.88022 0.309656L6.00022 4.18965L2.12022 0.309656C1.93324 0.122678 1.67965 0.0176349 1.41522 0.0176349C1.1508 0.0176349 0.8972 0.122678 0.710222 0.309656C0.523244 0.496633 0.418203 0.750229 0.418203 1.01466C0.418203 1.27908 0.523244 1.53268 0.710222 1.71966L5.30022 6.30965C5.39274 6.40236 5.50262 6.47591 5.6236 6.52609C5.74457 6.57627 5.87425 6.6021 6.00522 6.6021C6.13619 6.6021 6.26587 6.57627 6.38685 6.52609C6.50782 6.47591 6.61771 6.40236 6.71022 6.30965L11.3002 1.71966C11.6802 1.33966 11.6802 0.699656 11.2902 0.309656Z"
                                fill="white"/>
                        </svg>
                    </h6>

                    <div class="flex flex-col">
                        @foreach($categories as $category)
                            <div class="flex gap-x-2 items-center pb-2.5">
                                <input type="checkbox" id="name"
                                       class="bg-transparent border-2 border-[#7A798A] rounded" name="categories[]"
                                       value="{{$category->id}}">
                                <label for="name" class="text-white">{{$category->name}}</label>
                            </div>
                        @endforeach
                    </div>

                    <hr class="rounded mt-6 mb-8 bg-[#343444]">
                </div>

                <div>
                    <h6 class="font-bold text-xl text-white pb-2.5 flex justify-between items-center">Collections
                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2902 0.309656C11.1977 0.216953 11.0878 0.143405 10.9668 0.0932235C10.8459 0.0430421 10.7162 0.0172119 10.5852 0.0172119C10.4543 0.0172119 10.3246 0.043042 10.2036 0.0932235C10.0826 0.143405 9.97274 0.216952 9.88022 0.309656L6.00022 4.18965L2.12022 0.309656C1.93324 0.122678 1.67965 0.0176349 1.41522 0.0176349C1.1508 0.0176349 0.8972 0.122678 0.710222 0.309656C0.523244 0.496633 0.418203 0.750229 0.418203 1.01466C0.418203 1.27908 0.523244 1.53268 0.710222 1.71966L5.30022 6.30965C5.39274 6.40236 5.50262 6.47591 5.6236 6.52609C5.74457 6.57627 5.87425 6.6021 6.00522 6.6021C6.13619 6.6021 6.26587 6.57627 6.38685 6.52609C6.50782 6.47591 6.61771 6.40236 6.71022 6.30965L11.3002 1.71966C11.6802 1.33966 11.6802 0.699656 11.2902 0.309656Z"
                                fill="white"/>
                        </svg>
                    </h6>

                    <div class="flex flex-col">
                        @foreach($collections as $collection)
                            <div class="flex gap-x-2 items-center pb-2.5">
                                <input type="checkbox" id="name"
                                       class="bg-transparent border-2 border-[#7A798A] rounded" name="collections[]"
                                       value="{{$collection->id}}">
                                <label for="name" class="text-white">{{$collection->name}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <button class="bg-white text-blue p-4 mt-4 mb-4 text-center rounded">Search</button>

                <a href="{{route('explore')}}" class="bg-white text-blue p-4 mt-4 mb-4 text-center rounded block">Reset Filters</a>
            </div>
        </form>


        <div class="w-[80%]">
            @if($item->count() == 0)
                <h1 class="text-white text-2xl text-center flex items-center justify-center h-full font-bold">hola, no hemos encontrado nada con tus criterios de busqueda</h1>
            @endif
            <x-card :items="$item"></x-card>
        </div>
    </section>
@endsection
