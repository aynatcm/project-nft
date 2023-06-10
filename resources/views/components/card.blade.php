<div class="bg-[#343444] rounded-[20px] h-[511px] w-[330px] p-[20px] flex flex-col gap-y-[21px] ">
    <div class="bg-[#7A798A] w-[290px] h-[290px] rounded-[20px] relative group block duration-300 ease-in-out">
        <div
            class="bg-[#7A798A] w-[290px] h-[286px] rounded-[20px] absolute border-blue-800 top-0 hidden justify-center items-center group-hover:flex group-hover:items-center group-hover:justify-center ease-in-out">
            <button
                class=" {{ request()->routeIs('create') ? 'hidden' : 'bg-red-800'}} flex justify-center items-center gap-x-1.5 bg-white text-black px-12 py-3 rounded-3xl duration-300 ease-in-out">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.8756 4.39169H13.0553C15.4167 4.39169 17.3332 6.26669 17.3332 8.56669V13.1667C17.3332 15.4667 15.4167 17.3334 13.0553 17.3334H4.9444C2.583 17.3334 0.666504 15.4667 0.666504 13.1667V8.56669C0.666504 6.26669 2.583 4.39169 4.9444 4.39169H5.12407C5.14118 3.39169 5.5433 2.45835 6.27054 1.75835C7.00634 1.05002 7.94748 0.691687 9.00839 0.666687C11.1302 0.666687 12.8499 2.33335 12.8756 4.39169ZM7.16891 2.65002C6.68979 3.11669 6.42456 3.73335 6.40745 4.39169H11.5923C11.5666 3.02502 10.4201 1.91669 9.00841 1.91669C8.34961 1.91669 7.66515 2.17502 7.16891 2.65002ZM12.251 7.60002C12.6104 7.60002 12.8927 7.31669 12.8927 6.97502V6.00835C12.8927 5.66669 12.6104 5.38335 12.251 5.38335C11.9002 5.38335 11.6093 5.66669 11.6093 6.00835V6.97502C11.6093 7.31669 11.9002 7.60002 12.251 7.60002ZM6.3133 6.97502C6.3133 7.31669 6.03096 7.60002 5.67162 7.60002C5.32083 7.60002 5.02993 7.31669 5.02993 6.97502V6.00835C5.02993 5.66669 5.32083 5.38335 5.67162 5.38335C6.03096 5.38335 6.3133 5.66669 6.3133 6.00835V6.97502Z"
                          fill="#5142FC"/>
                </svg>

                Buy
            </button>
        </div>
    </div>
    <div>
        <h2 class="text-white mb-[17px] break-all" id="name-change">"Hamlet Contemplates Yorick's...</h2>
        <div class="flex gap-x-[97px] items-center gap-y-[19px] mb-[19px]">
            <div class="flex gap-x-[12px] items-center">
                <div class="bg-[#7A798A] h-[44px] w-[44px] rounded-[15px]"></div>
                <div>
                    <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Creator</h4>
                    <h3 class="text-white font-bold text-[15px] leading-[22px] break-all w-[70px]">SalvadorDali</h3>
                </div>
            </div>
            <div
                class="bg-[#5142FC] rounded-[8px] w-[49px] h-[24px] font-bold text-[12px] leading-[20px text-white flex items-center justify-center">
                <span>BSC</span>
            </div>
        </div>
        <hr class="border-black mb-[15px]">
        <div class="flex gap-x-[95px] items-center">
            <div class=>
                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Current Bid</h4>
                <div class="flex gap-x-[7px] items-center">
                    <h2 class="text-white">4.89 ETH</h2>
                    <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">= $12.246</h4>
                </div>
            </div>
            <button class="flex bg-[#14141F] w-[64px] h-[28px] items-center justify-center gap-x-[5px] rounded-[8px]">
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z"
                        fill="white"/>
                </svg>
                <span class="text-white">100</span>
            </button>
        </div>
    </div>
</div>
