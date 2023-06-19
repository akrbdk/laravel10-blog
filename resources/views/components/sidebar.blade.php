@php use App\Models\TextWidget; @endphp
    <!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    @if(isset($categories))
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <h3 class="text-xl font-semiblod mb-3">
                All Categories
            </h3>
            @foreach($categories as $category)
                <a href="{{ route('by-category', $category) }}"
                   class="text-semiblod block py-2 px-3 rounded {{ request('category')?->slug === $category->slug ? 'bg-blue-600 text-white' : '' }}">
                    {{ $category->title }} ({{ $category->total }})
                </a>
            @endforeach
        </div>
    @endif

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">
            {{ TextWidget::getTitle('about-us-sidebar') }}
        </p>
        <p class="pb-2">
            {!! TextWidget::getContent('about-us-sidebar') !!}
        </p>
        <a href="#"
           class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>

</aside>
