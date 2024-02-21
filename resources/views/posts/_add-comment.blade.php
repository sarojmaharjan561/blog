@auth
<x-panel>
    <form method="POST" action="/posts/{{$post->slug}}/comments">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/40?u={{auth()->id()}}" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to Participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" class="w-full p-6 text-sm focus:outline-none focus:ring" id="" rows="3" placeholder="Quick, think of something to say!" required></textarea>
        </div>
        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <button type="submit" class="bg-blue-500 font-semibold hover:bg-blue-600 px-10 py-2 rounded-2xl text-white text-xs uppercase">Post</button>
        </div>
    </form>
    @error('body')
    <span class="text-xs text-red-500">{{$message}}</span>
    @enderror
</x-panel>
@else
<p>
    <a href="/register" class="hover:underline hover:text-blue-600 font-semibold">Register </a> OR <a href="/login" class="hover:underline hover:text-blue-600 font-semibold">Login</a> to leave comments!
</p>
@endauth