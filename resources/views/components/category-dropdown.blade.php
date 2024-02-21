<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:wd-32 text-left flex lg:inline-flex">

            {{isset($currentCategory)?ucwords($currentCategory->name):'Categories'}}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" width="22" height="22" />

        </button>
    </x-slot>

    <x-slot name="content">
        <x-dropdown-item href="/?{{http_build_query(request()->except('category'))}}">All</x-dropdown-item>

        @foreach($categories as $category)
        <x-dropdown-item href="/?category={{$category->slug}}&{{http_build_query(request()->except('category'))}}" class="{{isset($currentCategory) && $currentCategory->id === $category->id?'bg-blue-500 text-white':''}}">
            {{ucwords($category->name)}}
        </x-dropdown-item>
        @endforeach
    </x-slot>

</x-dropdown>