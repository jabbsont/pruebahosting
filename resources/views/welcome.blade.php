<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3JMA ADMINISTRATIVO</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <div class="container mx-auto flex flex-col w-1/2 justify-center">
            <h1 class="mt-8 text-lg text-center tracking-widest">3JMA ADMINISTRATIVO</h1>

            <ul class="flex flex-col content-center">
                <a class="text-white font-bold text-xl text-center" href="#">
                    <li class="mx-2 w-4/5 mx-auto rounded-md bg-blue-500 hover:bg-blue-700 hover:border-4 hover:border-gray-50 transition duration-500 my-6 py-6 px-3 shadow-sm">
                        Inventario
                    </li>
                </a>
                <a class="text-white font-bold text-xl text-center" href="#">
                    <li class="mx-2 w-4/5 mx-auto rounded-md bg-blue-500 hover:bg-blue-700 hover:border-4 hover:border-gray-50 transition duration-500 my-6 py-6 px-3 shadow-sm">
                        Administracion
                    </li>
                </a>
                <a class="text-white font-bold text-xl text-center" href="#">
                    <li class="mx-2 w-4/5 mx-auto rounded-md bg-blue-500 hover:bg-blue-700 hover:border-4 hover:border-gray-50 transition duration-500 my-6 py-6 px-3 shadow-sm">
                        Clientes
                    </li>
                </a>
                <a class="text-white font-bold text-xl text-center mb-4" href="#">
                    <li class="mx-2 w-4/5 mx-auto rounded-md bg-blue-500 hover:bg-blue-700 hover:border-4 hover:border-gray-50 transition duration-500 my-6 py-6 px-3 shadow-sm">
                        Proveedores
                    </li>
                </a>
            </ul>
        </div>
    </body>
</html>