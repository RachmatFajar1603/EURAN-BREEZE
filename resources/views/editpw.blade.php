<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-URAN | Biodata</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#fafafa]">

    <!--Navbar Start-->
  <nav class="bg-[#fafafa] md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center">
      <a href="/landingpage"><img class="h-28 inline pl-10 cursor-pointer" src="{{ asset('images/logo.jpg') }}" alt="logo"></a><!--logo-->

    <span class="text-3xl cursor-pointer md:hidden block mx-2">
      <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
    </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#fafafa] w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-5 my-6 md:my-0">
        <a href="/informasitagihan" class="text-xl hover:text-[#426A4E] duration-500">Informasi Tagihan</a>
      </li>
      <li class="mx-5 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-[#426A4E] duration-500">Riwayat Pembayaran</a>
      </li>
      <li class="mx-5 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-[#426A4E] duration-500">Bukti Pengambilan Sampah</a>
      </li>

      <!--dropdown start-->
      <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="mx-12 my-6 md:my-0 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
      </button>
      
      <!-- Dropdown menu -->
      <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-800 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-800 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center">Biodata</a>
            </li>
            <li>
              <a href="/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center">Logout</a>
            </li>
          </ul>
      </div>
      <!--dropdown end-->
    </ul>
  </nav>
  <!--Navbar End-->
  
  <div class="overflow-hidden justify-end bg-white sm:rounded-xl relative w-3/6 m-auto mt-14 shadow-lg">
    <div class="px-4 py-5 sm:px-6 bg-white">
      <h3 class="text-xl font-semibold leading-6 text-black">Ubah Password</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-1000">Untuk keamanan akun Anda, mohon untuk tidak menyebarkan password Anda ke orang lain</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Password saat ini</dt>
          <input class=" text-sm text-gray-900 sm:col-span-1 sm:mt-0p-2 w-full h-8 rounded-lg border-t border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#6C8D6C] focus:border-transparent" type="text" name="current_pw">
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Password yang baru</dt>
          <input class=" text-sm text-gray-900 sm:col-span-1 sm:mt-0p-2 w-full h-8 rounded-lg border-t border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#6C8D6C] focus:border-transparent" type="text" name="new_pw">
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Konfirmasi Password</dt>
          <input class="text-sm text-gray-900 sm:col-span-1 sm:mt-0p-2 w-full h-8 rounded-lg border-t border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#6C8D6C] focus:border-transparent" type="text" name="new_pw">
        </div>
        <div class="py-8 px-48 flex justify-start">
            <a href="/biodata"><button type="button" class="py-2 px-5 text-base font-medium text-white focus:outline-none bg-[#BD7423] rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Konfirmasi</button></a>
        </div>                  
    </div>
    </div>

    <script>
        function Menu(e){
          let list = document.querySelector('ul');
    
          e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :( e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
      </script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>