<div class="flex flex-col mb-6 border-b">
    <p class="-mb-4 text-grey font-medium">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl">
        <a href="{{ $page->url($post->getPath()) }}"
            title="Read more - {{ $post->title }}"
            class="text-black font-extrabold">
            {{ $post->title }}
        </a>
    </h2>

    <p class="mt-0 mb-4 text-xl font-light">{!! $post->excerpt() !!}</p>

    <a href="{{ $page->url($post->getPath()) }}"
        title="Read more - {{ $post->title }}"
        class="mb-4 text-blue uppercase font-semibold tracking-wide">
        Read
    </a>
</div>
