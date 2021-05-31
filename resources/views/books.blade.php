<x-testapp>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <x-slot name="title">
            Laravel Components
    </x-slot>

    <x-slot name="sidebar">
        <p>サイドバーに追加できます。</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    ブックスだよ
                    <x-alert :message="$message" type="info" />
                </div>
            </div>
        </div>
    </div>
</x-testapp>
