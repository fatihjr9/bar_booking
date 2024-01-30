<button class="bg-gray-50 border border-gray-300 w-full py-1.5 rounded-md" data-modal-target="default-modal" data-modal-toggle="default-modal">See Menus</button>
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Menu
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 gap-4 grid grid-cols-1">
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <h5 class="font-semibold text-lg">Starter Package</h5>
                        <p class="text-slate-800 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, debitis!</p>
                    </div>
                    <div class="flex flex-row items-center ml-auto">
                        <div class="flex flex-row gap-x-1 items-center">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>
                        <p class="text-semibold">Rp 800.000</p>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 justify-end">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
            </div>
        </div>
    </div>
</div>