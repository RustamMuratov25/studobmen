<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - ТПУ Барахолка</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tpu-border { border: 2px solid #00ab4e; }
        .tpu-text { color: #00ab4e; }
        .tpu-bg { background-color: #00ab4e; }
    </style>
</head>
<body class="bg-white font-sans text-gray-900">

    <div class="max-w-7xl mx-auto p-4">
        <header class="flex flex-col md:flex-row items-center justify-between gap-6 mb-10">
            <div class="flex items-center gap-4">
                <img src="https://portal.tpu.ru/ic/img/tpu_logo.png" alt="Лого ТПУ" class="h-16">
                <div class="font-bold text-sm uppercase leading-tight tracking-tighter">
                    Томский<br>политехнический<br>университет
                </div>
            </div>

            <div class="flex flex-1 items-center gap-3 w-full max-w-3xl">
                <div class="relative w-full">
                    <input type="text" placeholder="Поиск по объявлениям..."
                           class="w-full tpu-border rounded-full py-2 px-12 focus:outline-none">
                    <i class="fa fa-search absolute left-5 top-3 tpu-text"></i>
                </div>
                <div class="flex items-center gap-2 font-bold tpu-text cursor-pointer">
                    <span>En</span>
                    <div class="w-10 h-10 tpu-bg text-white rounded-full flex items-center justify-center">
                        <i class="fa fa-moon"></i>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-6 text-2xl text-gray-800">
                <i class="fa-regular fa-heart cursor-pointer hover:tpu-text transition"></i>
                <i class="fa fa-shopping-cart cursor-pointer hover:tpu-text transition"></i>
                <i class="fa-regular fa-circle-user text-4xl cursor-pointer hover:tpu-text transition"></i>
            </div>
        </header>

        <div class="flex gap-4 mb-8">
    <a href="{{ route('create') }}" class="tpu-border tpu-text font-bold py-2 px-8 rounded-xl hover:bg-green-50 transition inline-block">
        Разместить объявление
    </a>

    <button class="tpu-border tpu-text font-bold py-2 px-8 rounded-xl hover:bg-green-50 transition">
        Мои объявления
    </button>
</div>

        <main class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <i class="fa fa-pot-food text-3xl"></i>
                <span class="text-xs font-bold uppercase">Посуда</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <i class="fa fa-pen-nib text-3xl"></i>
                <span class="text-xs font-bold uppercase text-center">Канцелярия</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <i class="fa fa-shirt text-3xl"></i>
                <span class="text-xs font-bold uppercase">Текстиль</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <i class="fa fa-keyboard text-3xl"></i>
                <span class="text-xs font-bold uppercase">Периферия</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <i class="fa fa-mobile-screen text-3xl"></i>
                <span class="text-xs font-bold uppercase font-bold">Гаджеты</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer transition">
                <div class="grid grid-cols-3 gap-0.5">
                    <div class="w-2 h-2 tpu-bg"></div><div class="w-2 h-2 bg-black"></div><div class="w-2 h-2 tpu-bg"></div>
                    <div class="w-2 h-2 bg-black"></div><div class="w-2 h-2 tpu-bg"></div><div class="w-2 h-2 bg-black"></div>
                </div>
                <span class="text-xs font-bold uppercase">Мерч</span>
            </div>

            <div class="lg:col-span-2 tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer">
                <i class="fa fa-dumbbell text-3xl"></i>
                <span class="text-xs font-bold uppercase">Спорт</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer">
                <i class="fa fa-layer-group text-3xl"></i>
                <span class="text-xs font-bold uppercase">Настолки</span>
            </div>

            <div class="lg:col-span-2 tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer">
                <i class="fa fa-gamepad text-3xl"></i>
                <span class="text-xs font-bold uppercase font-bold">Гейминг</span>
            </div>

            <div class="tpu-border bg-gray-50 rounded-2xl p-6 flex flex-col items-center justify-center gap-2 hover:shadow-md cursor-pointer">
                <i class="fa fa-guitar text-3xl"></i>
                <span class="text-xs font-bold uppercase">Творчество</span>
            </div>

            <div class="col-span-full tpu-border bg-gray-50 rounded-2xl py-4 flex flex-col items-center justify-center hover:bg-green-50 cursor-pointer transition">
                <i class="fa fa-box-open text-2xl mb-1"></i>
                <span class="font-bold uppercase tracking-widest text-sm">Отдам даром</span>
            </div>

        </main>
    </div>
    <div class="ads-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
    @foreach($ads as $ad)
        <div class="ad-card" style="border: 2px solid #4CAF50; border-radius: 8px; padding: 10px; background: #f9f9f9; position: relative;">

            <div style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.72-8.72 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
            </div>

            <div style="height: 150px; border-radius: 4px; overflow: hidden; margin-bottom: 10px; background: #e0e0e0; display: flex; align-items: center; justify-content: center;">
    @if($ad->images && $ad->images->first())
        <img src="{{ asset($ad->images->first()->image_url) }}"
             alt="{{ $ad->title }}"
             style="width: 100%; height: 100%; object-fit: cover;">
    @else
        <svg width="50" height="50" viewBox="0 0 24 24" fill="#ccc"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
    @endif
</div>

            <div style="font-family: sans-serif;">
                <div style="font-weight: bold; margin-bottom: 5px; height: 40px; overflow: hidden;">
                    {{ $ad->title }}
                </div>
                <div style="font-weight: 900; font-size: 1.1em; margin-bottom: 5px;">
                    {{ number_format($ad->price, 0, '.', ' ') }} ₽
                </div>
                <div style="color: #555; font-size: 0.9em;">
                    {{ $ad->address }}
                </div>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
