<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Marco Nobre - Desenvolvedor Back-End PHP</title>
</head>
<body class="bg-slate-200 text-stone-800">

<?php
include_once "./components/navbar.php";
?>

<main class="container mx-auto my-6 px-4">

    <div class="px-6 py-5 grid md:grid-cols-2 gap-4 items-center">
        <div class="flex justify-center items-center">
            <img src="./images/" alt="Minha foto"
                 class="mx-6 my-2 max-w-[280px] sm:max-w-[350px] rounded-full">
        </div>
        <div class="" id="sobre_mim">
            <p class="text-justify text-xl">
                Me chamo Marco Antônio, sou desenvolvedor back-end júnior de 21 anos, moro em Governador Valadares, MG.
                Com um conhecimento em PHP, MySQL, JavaScript, controle de versão e formação técnica em Desenvolvimento
                de
                Sistemas, estou em constante busca por aprimoramento e novos desafios.
            </p>
            <p class="text-justify text-xl mt-5">
                Atualmente, aprofundo meus conhecimentos em Laravel e desenvolvo pequenos sistemas.
            </p>
        </div>
    </div>

    <div id="tecnologias" class="mt-5 grid lg:grid-cols-3 gap-4 py-4 px-3">
        <div>
            <h1 class="text-3xl mt-5 px-7 flex justify-center align-center">
                Tecnologias
            </h1>
            <div class="px-7 py-6">
                <a href="https://skillicons.dev" target="_blank" class="flex justify-center align-center">
                    <img
                            src="https://skillicons.dev/icons?i=git,github,windows,vscode,phpstorm,mysql,bootstrap,tailwind&theme=light"
                            alt="Tecnologias">
                </a>
            </div>
        </div>
        <div>
            <h1 class="text-3xl mt-5 px-7 flex justify-center align-center">
                Linguagens
            </h1>
            <div class="px-7 py-6 text-center">
                <a href="https://skillicons.dev" target="_blank" class="flex justify-center align-center">
                    <img src="https://skillicons.dev/icons?i=php,javascript,css,html&theme=light"
                            alt="Linguagens">
                </a>
            </div>
        </div>
        <div>
            <h1 class="text-3xl mt-5 px-7 flex justify-center align-center">
                Frameworks
            </h1>
            <div class="px-7 py-6">
                <a href="https://skillicons.dev" target="_blank" class="flex justify-center align-center">
                    <img
                            src="https://skillicons.dev/icons?i=laravel,bootstrap,tailwind&theme=light"
                            alt="Frameworks">
                </a>
            </div>
        </div>
    </div>

    <div id="meus_projetos" class="mt-5">
        <h1 class="text-3xl mt-6 px-7">
            Meus projetos
        </h1>

        <div class="flex gap-4 mt-8 overflow-x-auto max-width py-6 px-4">
            <div
                    class="max-w-sm min-w-1/2 md:min-w-1/5 rounded-2xl overflow-hidden shadow-lg bg-gray-300 box-shadow-card p-4">
                <img class="w-full max-h-64 object-cover rounded-lg" src="./images/" alt="Imagem do Card">
                <div class="py-4">
                    <h2 class="text-xl font-semibold text-slate-700">Novo projeto</h2>
                    <p class="text-slate-700 mt-2">Projeto em andamento</p>
                </div>
                <div class="mt-4 flex justify-center items-center">
                    <button class="bg-slate-500 text-slate-100 px-4 py-2 rounded-lg hover:bg-slate-600 transition cursor-pointer">
                        Saiba Mais
                    </button>
                </div>
            </div>
            <div
                    class="max-w-sm min-w-1/2 md:min-w-1/5 rounded-2xl overflow-hidden shadow-lg bg-gray-300 box-shadow-card p-4">
                <img class="w-full max-h-64 object-cover rounded-lg" src="./images/emBreve.jpg" alt="Imagem do Card">
                <div class="py-4">
                    <h2 class="text-xl font-semibold text-slate-700">Novo projeto</h2>
                    <p class="text-slate-700 mt-2">Projeto em andamento</p>
                </div>
                <div class="mt-4 flex justify-center items-center">
                    <button class="bg-slate-500 text-slate-100 px-4 py-2 rounded-lg hover:bg-slate-600 transition cursor-pointer">
                        Saiba Mais
                    </button>
                </div>
            </div>

        </div>
    </div>

</main>

<?php
include_once "./components/footer.php";
?>

</body>
</html>
