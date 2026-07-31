<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать объявление - ТПУ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tpu-border { border: 2px solid #00ab4e; }
        .tpu-text { color: #00ab4e; }
        .tpu-bg { background-color: #00ab4e; }
        .tpu-focus:focus { border-color: #00ab4e; outline: none; }
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <div class="max-w-4xl mx-auto p-4">
        <div class="mb-6">
            <a href="{{ route('home') }}" class="tpu-text font-bold flex items-center gap-2 hover:underline">
                <i class="fa fa-arrow-left"></i> Вернуться на главную
            </a>
        </div>

        <form action="{{ route('ad.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-2xl tpu-border p-8 shadow-sm space-y-6">
                <div>
                    <label class="block text-sm font-bold uppercase mb-2">Название товара*</label>
                    <input type="text" name="title" required placeholder="Например: Учебник по физике 1 курс"
                           class="w-full border-2 border-gray-200 rounded-xl py-2 px-4 tpu-focus">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-bold uppercase mb-2">Категория*</label>
                        <select name="category" required class="w-full border-2 border-gray-200 rounded-xl py-2 px-4 tpu-focus bg-white">
                            <option value="1">Посуда</option>
                            <option value="2">Канцелярия</option>
                            <option value="3">Текстиль</option>
                            <option value="4">Гаджеты</option>
                            <option value="5">Учебники</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold uppercase mb-2">Состояние</label>
                        <select name="condition" class="w-full border-2 border-gray-200 rounded-xl py-2 px-4 tpu-focus bg-white">
                            <option value="new">Новое</option>
                            <option value="used">Б/У</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold uppercase mb-2">Цена (₽)</label>
                        <div class="relative">
                            <input type="number" name="price" required placeholder="0" min="0" step="0.01"
                                   class="w-full border-2 border-gray-200 rounded-xl py-2 pl-4 pr-10 tpu-focus font-bold text-green-700">
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400">
                                <i class="fa fa-ruble-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold uppercase mb-2">Адрес*</label>
                    <input type="text" name="address" required placeholder="Например: Вершинино 37"
                           class="w-full border-2 border-gray-200 rounded-xl py-2 px-4 tpu-focus">
                </div>

                <div>
                    <label class="block text-sm font-bold uppercase mb-2">Описание*</label>
                    <textarea name="description" rows="4" required placeholder="Опишите товар..."
                              class="w-full border-2 border-gray-200 rounded-xl py-2 px-4 tpu-focus"></textarea>
                </div>
            </div>

            <div class="bg-white rounded-2xl tpu-border p-8 shadow-sm mt-6">
                <label class="block text-sm font-bold uppercase mb-4">Фотографии</label>
                <div class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 rounded-2xl p-10 bg-gray-50">
                    <i class="fa fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                    <p class="text-sm text-gray-500 text-center">Загрузите фотографии товара (можно выбрать несколько)</p>
                    <input type="file" name="images[]" multiple class="mt-4 text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-green-50 file:text-green-700
                        hover:file:bg-green-100 cursor-pointer">
                </div>
            </div>

            <div class="flex justify-end gap-4 mt-8">
                <button type="submit" class="tpu-bg text-white font-bold py-3 px-10 rounded-xl hover:opacity-90 transition-all shadow-lg active:scale-95">
                    Опубликовать объявление
                </button>
            </div>
        </form>
    </div>

</body>
</html>
