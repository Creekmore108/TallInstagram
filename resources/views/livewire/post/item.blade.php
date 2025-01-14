<div class="max-w-lg mx-auto">
   {{-- Header --}}
   <header class="flex items-center gap-3">

    <x-avatar src="https://picsum.photos/400/" class="h-9 w-9" />

    <div class="grid grid-cols-7 w-full gap-2">
        <h5 class="font-semi-bold truncate text-sm"> {{ fake()->name }}</h5>
    </div>
    <div class="col-span-2 flex text-right justify-end">
        <button class="text-gray-500 ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
              </svg>
        </button>
    </div>

   </header>


   {{-- Main --}}
   <main>
    <div class="my-2">
        <x-video />
    </div>
   </main>

   {{-- Footer --}}

</div>
