<div>
    <div class="relative mt-3 md:mt-0">
        <input wire:model="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-non focus:shadow-outline" placeholder="Search">
    </div>
    <div class="absolute bg-gray-800 rounded w-64 mt-4">
        <ul>
            @foreach ($searchResults as $result)
                <li class="border-b border-gray-700">
                    <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 transition ease-in-out duration-150">{{ $result['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
