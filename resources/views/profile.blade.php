<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Charm:wght@400;700&family=Oxygen:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <x-navbar></x-navbar>

    <main class="bg-blue-400">
        {{-- profile kadis --}}
        
        <section>
            <h1 class="text-5xl text-center font-bold font-audiowide">
                Profile
            </h1>
            <div class="flex flex-col sm:flex-row items-center container mx-auto px-4 py-10">
                <div data-aos="fade-left" class="w-full sm:w-1/2 flex justify-center border-b-4">
                    <img src="{{ asset('img/pngwing.com.png') }}" alt="Logo" class="w-full sm:w-8/12">
                </div>
                <div data-aos="fade-right" class="w-full sm:w-1/2 text-center sm:text-left">
                    <h1 class="text-4xl sm:text-5xl font-bold uppercase font-sans">
                        Mesut Ozil
                    </h1>
                    <p class="text-xl font-bold font-charm">Jabatan Kepala Dinas</p>
                    <p class="font-mono mt-10">
                        "Era digital bukan sekadar tantangan, tetapi peluang. Mari manfaatkan dengan bijak!"
                    </p>
                </div>
            </div>
        </section>

        <!-- Visi Misi Section -->
        <section id="visi-misi" class="mt-40">
            <h2 class="text-5xl font-bold text-center">Visi & Misi</h2>
            <p data-aos="fade-up">Isi dari visi dan misi di sini
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi debitis quam delectus numquam
                praesentium aliquam vero esse magni enim ab, mollitia vel illo repellat iusto? Reiciendis quos
                perferendis voluptatibus veniam ipsum adipisci ab, officiis quaerat facere ratione maiores magnam alias
                expedita eos sit ipsa ut possimus cumque voluptate nisi? Similique unde, corporis ipsam quidem ab omnis
                qui quas dolores blanditiis quam consequuntur esse tempora provident rem est ut eum, asperiores
                accusantium nemo hic cumque corrupti consectetur expedita pariatur? Placeat temporibus ipsa architecto
                cupiditate culpa perspiciatis dolorum neque deserunt? Minima et magnam, autem expedita similique,
                nostrum est delectus modi accusantium provident praesentium, doloribus porro. Eum ex at voluptatem cum
                fuga adipisci deleniti vero sequi repellat, odit consequuntur velit voluptatum animi quibusdam deserunt
                quod? Ab accusantium quisquam magnam voluptatem quaerat, assumenda culpa atque cupiditate deserunt. At
                ea cum commodi repellat veniam asperiores nemo, quis sed aperiam quia consectetur dolor odit id facere.
                Voluptate natus quia omnis consectetur eaque officiis. Nam voluptatibus doloremque, blanditiis optio
                eaque omnis. Quod inventore nihil officiis facere nisi id facilis, ad molestiae incidunt vel aperiam
                consectetur obcaecati illum sunt natus quaerat assumenda dicta molestias officia excepturi eligendi
                exercitationem. At, est nam totam sed reiciendis iste minima dolorem! Incidunt cum, similique
                consequatur repudiandae fugit magnam voluptate autem unde voluptatem nesciunt repellendus soluta a
                officiis? Vitae reiciendis voluptatibus voluptatum beatae doloribus quos est sed hic ex eveniet?
                Perspiciatis, necessitatibus modi temporibus reprehenderit quia nemo unde repellat maxime, aliquam
                asperiores commodi reiciendis ex officiis voluptatibus quisquam, labore accusantium alias quo
                voluptates? Expedita, ea nobis. Possimus facilis nobis recusandae in blanditiis numquam dolor odit
                cumque! Distinctio vero accusantium odio nemo numquam dolore, repellat iusto aperiam aspernatur nihil
                ipsum. Quidem, illo. Voluptatem inventore nostrum animi voluptatum? Commodi sequi rem, perspiciatis
                consectetur inventore esse, ab fugit impedit dolor sapiente sit facere quia? Reprehenderit quia, dolorum
                expedita quos nostrum corporis alias est suscipit cumque adipisci labore nam praesentium odio commodi
                amet deleniti illum quaerat magni pariatur atque impedit quidem nemo hic optio! Laborum laudantium
                praesentium repellendus aliquam alias sequi omnis, minus sunt, libero aperiam rerum quod. Molestias
                quos, vitae dolor ratione rerum error magni amet, soluta iste itaque architecto repudiandae corrupti id
                explicabo distinctio deleniti praesentium illo dignissimos enim ut quas? Dolorum dolore sunt
                necessitatibus rem doloribus quia a eum exercitationem. Provident et sint a magnam nisi, nihil nulla
                dolores ullam libero. Voluptates voluptatum consequatur dicta obcaecati sunt vitae totam aut modi soluta
                deserunt inventore error molestiae distinctio recusandae reprehenderit temporibus quas asperiores
                architecto alias repudiandae, repellat voluptatibus sequi quisquam sapiente. Beatae voluptatibus
                voluptate corrupti soluta fuga adipisci eum id dignissimos. Hic ullam ratione rem accusamus earum vero
                pariatur excepturi aspernatur commodi unde vel voluptatibus consequuntur natus voluptatum quia iure
                tempore blanditiis error nobis quod quis, deleniti placeat! Minima molestias dicta nobis, pariatur ex
                veniam rem repudiandae cupiditate dignissimos quaerat ducimus earum, ipsum explicabo porro magnam
                provident! Dolor earum dolorum possimus optio atque vel, totam aperiam similique dolores odit saepe
                reprehenderit provident nemo itaque officia voluptatem ex unde cum assumenda non natus iure ratione
                laudantium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non exercitationem dolores, inventore ipsum nobis, placeat libero pariatur quo, voluptatem temporibus? Et officiis recusandae tempora quibusdam magnam fuga voluptatum suscipit, impedit aperiam tempore. Quis obcaecati nobis tenetur consectetur ab quidem reprehenderit voluptatem, facilis eum quae provident voluptatum. Tempora consequatur culpa exercitationem dolorum atque amet cum eaque dolorem. Consequatur error nihil soluta facilis ratione iure sapiente eaque, sunt pariatur officia adipisci alias nobis, quod atque ad voluptatem necessitatibus eligendi maxime! Quas fugit natus illum. Quos officia ad consequatur, saepe aperiam asperiores quia quis sint quod est explicabo molestiae hic sapiente debitis rem nostrum voluptatibus eaque aut architecto? Mollitia expedita id perferendis, rem, odit ipsa quo quidem tenetur ex provident ratione aperiam, pariatur accusamus sed quis. Placeat magni alias nisi, tenetur repudiandae odio praesentium beatae labore nobis, non quis officia obcaecati velit veniam sint fugit officiis! Ratione, molestias esse veniam quidem porro excepturi officiis unde impedit totam magni quis voluptatibus necessitatibus quod nostrum eligendi non facere, dolorum reiciendis fugit culpa rerum nulla facilis temporibus. Aspernatur at beatae earum neque similique velit explicabo. Soluta debitis et corporis ipsa nemo voluptas, natus quos atque? Aut sint corporis similique odio possimus numquam natus explicabo provident.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellendus quo quam vero, accusamus sint accusantium perspiciatis laboriosam tempore, sed eligendi beatae sit odit, ad tempora! Repudiandae officia asperiores hic rerum labore debitis ut cupiditate ipsum repellendus ipsam quisquam facere harum nemo praesentium aliquid quia assumenda laudantium, ad, atque exercitationem sapiente laborum voluptatum laboriosam? Perspiciatis ratione ullam exercitationem asperiores magnam quibusdam consequuntur, debitis minus ipsam modi maiores! Quas sapiente unde pariatur soluta natus illo dolor perferendis ex quae error ad facilis consectetur fuga in, beatae mollitia delectus molestias ab eligendi voluptate eum dicta exercitationem? Quae ullam minus vero dolore ab illum laudantium fugit pariatur? Eos ex iste error maxime autem aspernatur, cupiditate ullam, deserunt neque nostrum, dicta blanditiis nisi fuga tempore natus voluptatem assumenda nam quos delectus. Nam saepe eius, molestiae quam praesentium, excepturi a at sapiente amet eligendi eveniet neque, eos non totam. Praesentium numquam laboriosam natus illum tempore placeat fuga! Porro officia deleniti ipsa sapiente maxime obcaecati saepe delectus perspiciatis et iusto facere eum eius pariatur ullam ratione expedita dolore qui iure illum, iste itaque! Reiciendis accusamus sapiente voluptatibus quis earum sit ipsum adipisci vel explicabo! Iusto architecto amet, tenetur porro quod nesciunt quia odit necessitatibus quos eius modi cumque? Magnam quaerat quod quos non veniam! Quas autem corporis rerum. Nulla deserunt atque maxime, libero doloremque quos ab tempora dolorum vitae hic corporis excepturi est quam adipisci illo voluptas provident. Placeat esse sed, quaerat commodi cupiditate odit, praesentium aliquid et harum odio tempora dolores delectus repudiandae dicta necessitatibus voluptatum provident aut! Non sapiente nostrum ducimus nesciunt ad expedita, incidunt esse quaerat quo corporis itaque molestias neque ea rem dolores ut quasi fuga, est consectetur quibusdam necessitatibus ratione sint! Officia quo aut iusto! Velit consequuntur aliquam id aperiam reiciendis labore molestias ad dolore optio nostrum! Corporis blanditiis reiciendis temporibus.
            </p>
        </section>

        <!-- Struktur Organisasi Section -->
        <section id="struktur" class="mt-10">
            <h2 class="text-5xl font-bold font-audiowide text-center">Struktur Organisasi</h2>
            <p data-aos="fade-up">Isi dari struktur organisasi di sini
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa perspiciatis tempore, cupiditate harum beatae odio nesciunt neque et perferendis optio rerum consequuntur quas, sapiente rem dolor magni vitae debitis? Fugiat facilis maxime doloribus eos corrupti dolor. Itaque quas ea iure cum repellat explicabo et! Alias, quibusdam dicta dolor molestiae explicabo voluptate nesciunt eaque quam similique soluta quidem, hic nostrum aspernatur. Hic nemo molestias, aspernatur quidem, numquam delectus quos qui, magni sit eligendi suscipit debitis illum provident! Aperiam accusantium commodi ab nihil porro. Culpa deleniti ea accusantium id, corrupti officia et dicta, facere fugit distinctio error molestias sed delectus magnam quidem quaerat. Distinctio dolore, exercitationem magnam at, reiciendis libero sunt, consectetur rerum suscipit tempora nam blanditiis labore! Eveniet rem eligendi fuga! Sint temporibus, expedita repellendus velit ducimus dignissimos consectetur, necessitatibus corporis saepe eveniet odit est quisquam perferendis eius sequi aperiam officiis rem inventore, illo culpa voluptatem ratione. Facilis tempore molestiae, placeat cumque veniam voluptas illum rerum, laudantium commodi deserunt soluta, quisquam quod aut cum eum odit assumenda impedit dignissimos sunt ab facere officia eveniet. Id quod minima repudiandae quaerat enim eligendi aperiam accusamus ipsum velit libero laboriosam, qui fugit rem unde repellendus similique, quibusdam provident voluptas magni culpa commodi perspiciatis quis explicabo incidunt? Enim voluptas laborum perspiciatis pariatur similique laboriosam, ratione magni recusandae error expedita consequuntur id culpa tempora quasi harum omnis saepe reprehenderit, sint alias mollitia a magnam quas hic! Assumenda, aperiam. Maiores ab ad provident id rerum, sit optio nisi facilis consequatur delectus ex exercitationem, recusandae reprehenderit deleniti corrupti doloremque quia culpa iusto quaerat. Possimus perspiciatis quod vitae neque quisquam ducimus, autem exercitationem, deleniti laudantium, repellat officiis itaque nam sint. Repellendus, cum. Enim vitae debitis, harum voluptate asperiores accusamus saepe dolorem ullam explicabo earum nemo ipsa nam praesentium cupiditate, incidunt nesciunt inventore quia dignissimos magnam? Molestiae adipisci qui minima nihil incidunt, vel nulla, alias quae eius soluta excepturi non consequatur doloribus, eum quibusdam sunt optio. Inventore, veritatis voluptates, laborum non possimus corrupti iste iure sed cupiditate maxime earum minus amet quam tenetur aliquid ipsam animi, rem recusandae? Possimus assumenda repudiandae sequi, earum amet iusto veniam adipisci exercitationem ipsam! Facere quaerat corrupti debitis distinctio vel. Molestiae quos autem, accusantium consequuntur nisi perspiciatis excepturi, iusto expedita tenetur a totam sit, consequatur asperiores temporibus labore. Est vitae, optio cupiditate dicta soluta odit quo nobis explicabo distinctio cum expedita. Magni quidem tenetur omnis? Quod aperiam, error laboriosam a autem quos sapiente officiis, temporibus pariatur doloremque praesentium necessitatibus cupiditate reprehenderit incidunt delectus perspiciatis ea optio veritatis magnam sequi provident adipisci ullam! Animi ratione, labore facere, autem nobis doloremque dolorem neque nam atque modi, veniam vero et fuga ducimus dicta? Soluta nihil nostrum nisi error dolores fuga, dolorum recusandae minima amet, quo officia, ipsum quia culpa id doloremque libero iste ipsa iure voluptate modi voluptas adipisci laborum explicabo voluptatem. Provident corrupti assumenda nostrum illo voluptas voluptate ratione, dignissimos placeat culpa, odio magnam natus ad itaque quia illum molestiae, necessitatibus nobis eveniet dolor molestias voluptatibus aliquid quaerat? Illo quis iste culpa suscipit neque, qui consectetur quae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam blanditiis, placeat, facilis odit fuga consequuntur in qui impedit necessitatibus aperiam expedita labore. Voluptas nobis est illo quae. Delectus blanditiis qui quidem ipsa tempore architecto non rerum provident corporis natus praesentium accusantium nam, modi vel culpa reiciendis, similique dolorem illo in distinctio ut corrupti perferendis molestias numquam? Ducimus accusamus, beatae maxime perferendis culpa ipsa fugit molestias natus consequatur nam ea distinctio quod, sit tempore officiis laborum est atque eaque, reiciendis aut delectus? Facilis veritatis ex omnis. Ducimus in eligendi quis nisi quasi cumque quas repudiandae ipsam atque placeat sequi, adipisci temporibus eveniet voluptas ex corrupti! Vel ut, atque obcaecati quam impedit nemo quisquam ad tenetur veniam consectetur libero optio omnis id a laboriosam quasi? Harum, temporibus hic neque quae possimus, placeat qui labore consequatur doloremque optio, facere fugit pariatur quod quos. Eius at illum veritatis quis nulla recusandae? Nesciunt tempore illum aspernatur sequi sit nostrum, eligendi voluptas iste est assumenda, culpa voluptate sapiente repellat error facilis expedita ex labore exercitationem ipsam dolore recusandae. Perferendis, nobis quia! Quidem quas ipsam exercitationem hic labore, quaerat alias qui culpa natus ea. Provident, animi maxime libero mollitia deserunt soluta rerum magni itaque, quasi, reiciendis quo!
            </p>
        </section>
        </div>
    </main>

    <x-footer2></x-footer2>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi (1 detik)
            once: true, // Hanya berjalan sekali
            delay: 200 // Waktu delay sebelum mulai
        });
    </script>
</body>

</html>
