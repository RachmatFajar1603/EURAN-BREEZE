<x-app-layout>

    <div
        class="max-w-[1000px] p-6 mx-auto mt-[50px] bg-white border border-gray-200 rounded-lg shadow  ">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">From driver</h1>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">sampah dari rumah anda telah di ambil</p>

        <div class=" items-center max-w-[350px] mx-auto justify-center w-full pt-[80]">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-all"> <strong> Note : </strong> foto bukti sampah telah diambil</p>
        </div> 
    </div>
    
<!--footer start-->
<footer class="bg-[#fafafa] rounded-lg mt-28 dark:bg m-4">
    <div class="w-full container mx-auto p-4 md:px-6 md:py-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">E-URAN™</a>. All Rights Reserved.</span>
    </div>
  </footer>
    <!--footer end-->

</x-app-layout>