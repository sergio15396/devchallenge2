<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- If the application has a `lists` table, it will be passed as $lists. Otherwise show a message. --}}
                    @if(empty($lists) || (is_object($lists) && $lists->isEmpty()))
                        <div>{{ __('No lists found.') }}</div>
                    @else
                        <ol class="list-decimal list-inside">
                            @foreach($lists as $list)
                                <li class="py-1">
                                    @if(is_object($list))
                                        <a href="{{ url('/lists/' . ($list->id ?? $loop->iteration)) }}" class="text-blue-600 hover:underline">
                                            {{ $list->name ?? $list->title ?? 'List #' . $loop->iteration }}
                                        </a>
                                    @else
                                        {{ $list }}
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
