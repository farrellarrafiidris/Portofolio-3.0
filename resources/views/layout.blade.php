<head>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>layout</title>

</head>
<body>
    

<nav class="bg-black text-white">
    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-center">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap ">Portofolio</span>
      </a> 
    </div>
  </nav>
  
    @yield('content')

    

<footer class="bg-black rounded-lg shadow m-4 ">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white sm:text-center ">© 2024 <a href="https://flowbite.com/" class="hover:underline">FAI™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white  sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

</body>