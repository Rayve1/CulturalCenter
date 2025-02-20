<x-layout>
    <div id="con" class="hidden">
    </div>
    <div class="container mx-auto bg-floral-white rounded-xl w-full h-[600px] p-10 shadow-2xl border-2 border-amber-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 h-full">
            <!-- Картинка -->
            <div class="h-[500px] md:h-full bg-gray-500 border border-amber-200 rounded-xl overflow-hidden">
                <img src="" alt="Изображение выставки современного искусства" class="w-full h-full object-cover">
            </div>

            <!-- Информация о выставке -->
            <div class="h-full overflow-y-auto p-4">
                <h1 class="text-4xl font-bold text-teal-800 mb-4">Выставка "Современный Авангард"</h1>
                <p class="text-gray-700 leading-relaxed mb-8">
                    Погрузитесь в мир смелых экспериментов и новаторских идей на выставке "Современный Авангард"! Здесь вы увидите работы художников, ломающих стереотипы и создающих новые формы искусства.
                    <br><br>
                    Вас ждут картины, скульптуры, инсталляции и мультимедийные проекты, отражающие дух времени и выходящие за рамки привычного. Откройте для себя новые грани творчества и получите незабываемые впечатления!
                    <br><br>
                    Выставка будет открыта с 1 мая по 30 июня в зале современного искусства. Не пропустите!
                </p>
                <button class="text-4xl text-teal-700 shadow-2xl border-[5px] rounded-xl border-amber-300 w-[350px] h-[80px] flex flex-col items-center pt-3 mt-10 cursor-pointer hover:border-amber-200 hover:text-teal-400 transition-colors duration-300">
                    Посетить выставку
                </button>
            </div>
        </div>
    </div>
</x-layout>