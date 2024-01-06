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

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="flex  justify-center my-2 p-2" data-anijs="if: mouseover, do: pulse animated">
        <p class ="text-3xl font-bold text-purple-700">Group <span class="text-purple-500">Chatting</span>  With <span class="text-purple-500">Base 64</span></p>
        
    </div>
    <div class="flex  justify-center  p-2">
        <p class ="text-purple-500">"This application is a secure group chatting app built with base64 data encryption."</p>
        
    </div>
    <div class=" flex justify-center " >
        
        <div class=" shadow-xl rounded-lg w-full my-2 xl:w-3/4 ">
            <div class="relative  p-2   ">
                <div class="">
                    <div class="p-2">
                        <div data-anijs="if: click, do: swing animated">
                            <h1 class="text-zinc-500 font-bold" >Group Member</h1>
                        </div>
                        <div class="flex overflow-x-auto  gap-2 my-3 max-h-48 xl:flex-wrap overflow-x p-1" >
                            <?php foreach($data_pengguna as $item){ ?>
                            <div data-anijs="if: mouseover, do: pulse animated" class="p-2 rounded-lg bg-purple-400 text-sm text-white cursor-default hover:bg-purple-700 " ><?= $item['nama']?></div>
                            <?php }?>
                    
                            
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
    function getFormattedTime() {
        // Dapatkan waktu sekarang
        let waktuSekarang = new Date();

        // Ambil jam, menit, dan detik dari waktu sekarang
        let jam = waktuSekarang.getHours();
        let menit = waktuSekarang.getMinutes();

        // Tentukan apakah jam pagi atau sore
        let waktu = (jam < 12) ? 'AM' : 'PM';

        // Konversi jam ke format 12 jam
        jam = (jam % 12 === 0) ? 12 : jam % 12;

        // Tambahkan 0 di depan angka-angka satu digit
        jam = (jam < 10) ? '0' + jam : jam;
        menit = (menit < 10) ? '0' + menit : menit;

        // Hasilkan string dengan format "hh:mm AM/PM"
        let waktuFormat = jam + ':' + menit + ' ' + waktu;

        return waktuFormat;
    }
    function getFormattedTimeByParameter(a) {
        // Dapatkan waktu sekarang
        let waktuSekarang = new Date(a);

        // Ambil jam, menit, dan detik dari waktu sekarang
        let jam = waktuSekarang.getHours();
        let menit = waktuSekarang.getMinutes();

        // Tentukan apakah jam pagi atau sore
        let waktu = (jam < 12) ? 'AM' : 'PM';

        // Konversi jam ke format 12 jam
        jam = (jam % 12 === 0) ? 12 : jam % 12;

        // Tambahkan 0 di depan angka-angka satu digit
        jam = (jam < 10) ? '0' + jam : jam;
        menit = (menit < 10) ? '0' + menit : menit;

        // Hasilkan string dengan format "hh:mm AM/PM"
        let waktuFormat = jam + ':' + menit + ' ' + waktu;

        return waktuFormat;
    }
    $(function(){
        let ip_address = '127.0.0.1';
        let socket_port = '3000';
        let socket = io(ip_address+ ':' + socket_port);

        socket.on('connection');
        let chetinput= $('#chetinput');
        chetinput.keydown(function (e){
            if (e.key === "Enter" && !e.shiftKey) {
                let message = {
                    pesan: $(this).val(),
                    nama : '<?php echo $_SESSION['nama']; ?>',
                    waktu: getFormattedTime()
                };
                if(e.which === 13 && !e.shiftkey && $(this).val() != "" && $(this).val() != null){
                    socket.emit('sendChetTosServer',message);
                    
                    var data = {
                    'pengguna_id' : <?php  echo $_SESSION['key'];?>,
                    'pesan': $(this).val()
                    }
                    $.ajax({
                        type: "POST",
                        url: "/api/storePesan",
                        dataType:"json",
                        data: data,
                        success: function(response){
                        },
                        error: function(){
                        }
                    });
                    chetinput.val('');
                    return false;
                }
               
            }
        });

        socket.on('sendchetToClient', (massage)=>{
            var nama = massage.nama;
            var singkatNama = nama.substring(0, 2);
            $('#chetcontent').append(` <div class="flex my-2 gap-3"><div class="flex self-center  rounded-full ring-2 ring-white p-3 bg-purple-900 text-white text-xs uppercase">${singkatNama}</div><div class="   p-2 rounded-tl-lg rounded-tr-lg rounded-br-lg bg-purple-900" ><div class=""><h1 class="text-white">${massage.pesan}</h1></div> <div class="col  "><h1 class="text-right text-white text-xs">${massage.waktu}</h1></div></div></div>`);
        })

        // ini adalah menampilkan semua pesan
        $.ajax({
            type: "GET",
            url: "/api/pesan",
            dataType:"json",
            success: function(e){
                e.forEach((data)=>{
                    var nama = data.sender.nama;
                    var singkatNama = nama.substring(0, 2);
                    var dataPesan = data.pesan.split(/\u0000/);
                    var waktuData = getFormattedTimeByParameter(data.created_at);
                    $('#chetcontent').append(` <div class="flex my-2 gap-3"><div class="flex self-center  rounded-full ring-2 ring-white p-3 bg-purple-900 text-white text-xs uppercase">${singkatNama}</div><div class="   p-2 rounded-tl-lg rounded-tr-lg rounded-br-lg bg-purple-900" ><div class=""><h1 class="text-white">${dataPesan}</h1></div> <div class="col  "><h1 class="text-right text-white text-xs">${waktuData}</h1></div></div></div>`);
                });
            },
            error: function(){
                Swal.fire({
                    icon: "error",
                    title: "Maaf",
                    text: "Mungkin ada Kesalahan Teknis",
                }).then((result) => {
                    window.location.href = "/";
                });
            }
        });
    });
</script>
<script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
</body>
</html>