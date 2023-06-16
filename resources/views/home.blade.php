<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout meta-description="My personal blog page">

    <div class="container max-w-3xl mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Latest post -->
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Latest post
                </h2>

                <x-post-item :post="$latestPost"/>
            </div>

            <!-- Popular 3 post -->
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Popular posts
                </h2>

                @foreach($popularPosts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
        </div>

        <!-- Recommended posts -->
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                Recommended posts
            </h2>
            @foreach($recommendedPosts as $post)
                <x-post-item :post="$post"/>
            @endforeach
        </div>
    </div>

</x-app-layout>
