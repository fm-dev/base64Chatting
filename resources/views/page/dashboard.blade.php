<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
</head>
<body>
<div class="bg-white h-screen" >

    <!-- navbar -->
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Chatting Group</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Algoritma Base64</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- navbar -->
  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class=" flex justify-center " >
        <div class=" shadow-xl rounded-lg w-full xl:w-3/4 ">
            <div class="relative  p-2   ">
                <div class="">
                    <div class="p-2">
                        <div data-anijs="if: click, do: swing animated">
                            <h1 class="text-zinc-500 font-bold" >Group Member</h1>
                        </div>
                        <div class="flex overflow-x-auto  gap-2 my-3 xl:flex-wrap overflow-x p-1">
                            <div data-anijs="if: mouseover, do: pulse animated" class="p-2 rounded-lg bg-purple-400 text-sm text-white cursor-default hover:bg-purple-700 " >budionodsad</div>
                            
                            
                            <!-- <div class=" size-16">
                                <div class="inline-block  rounded-full ring-2 ring-white p-5 bg-grey-500">Bu</div>
                                <h1 class="text-center text-violet-900 truncate">budionodsad</h1>
                            </div>
                            <div class=" size-16">
                                <img class="inline-block  rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <h1 class="text-center text-violet-900 truncate">budiono</h1>
                            </div>
                            <div class=" size-16">
                                <img class="inline-block  rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <h1 class="text-center text-violet-900 truncate">budiono</h1>
                            </div> -->
                        </div>
                    </div>
                    <div class="p-2">
                        <h1 class="text-zinc-500 font-bold">Message</h1>
                    </div>
                    <div class="flex flex-col-reverse  p-2 my-2 min-h-96 max-h-96  rounded-lg  opacity-25 overflow-y-auto" >
                        
                        <div id="chetcontent">
                        </div>
                    </div>
                    <div class="  w-full ">
                        <div class=" p-2">
                            <div class="">
                                <div class="">
                                    <input id="chetinput" name="name" type="text" placeholder="Masukan Pesan anda" required class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mx-5 flex justify-center">
        <div class="flex flex-row  w-2/5">
            <div class="flex flex-col">
                <div class="basis-1/4 flex flex-col p-4 gap-4  rounded-lg m-3 shadow-xl items-center">  
                    <img class="inline-block size-20 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                    <img class="inline-block size-20 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="inline-block size-20 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
            </div>
            <div class="basis-1/2 ">
                <div class="flex flex-col p-4 rounded-lg m-3 shadow-xl items-center">

                </div>
            </div>
        </div>
    </div> -->
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.socket.io/4.7.2/socket.io.min.js" integrity="sha384-mZLF4UVrpi/QTWPA7BjNPEnkIfRFn4ZEO3Qt/HFklTJBj/gBOV8G3HcKn4NfQblz" crossorigin="anonymous"></script>
<script>
    $(function(){
        let ip_address = '127.0.0.1';
        let socket_port = '3000';
        let socket = io(ip_address+ ':' + socket_port);

        socket.on('connection');
        let chetinput= $('#chetinput');
        chetinput.keypress(function (e){
            let message = $(this).val();
            if(e.which === 13 && !e.shiftkey && message != ""){
                socket.emit('sendChetTosServer',message);
                chetinput.val('');
                return false;
            }
        });

        socket.on('sendchetToClient', (massage)=>{
            $('#chetcontent').append(` <div class="  my-2 p-2 rounded-lg bg-purple-900" ><div class="col"><h1 class="text-white">${massage}</h1></div> <div class="col  "><h1 class="text-right text-white">1 minutes ago</h1></div></div>`);
        })
    });
</script>
<script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
</body>
</html>