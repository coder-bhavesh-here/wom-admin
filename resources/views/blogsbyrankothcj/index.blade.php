<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add</a>
                {{-- <ul> --}}
                @foreach ($blogs as $blog)
                    <div class="m-5">
                        <div class="flex justify-between items-center"
                            style="border: 1px solid gray; padding: 10px; border-radius: 5px">
                            <div><strong>{{ $blog->is_faq ? 'FAQ' : 'Blog' }}</strong></div>
                            <div><strong>{{ $blog->title }}</strong></div>
                            <div>
                                <a href="{{ route('blogs.edit', $blog->id) }}"><button class="p-2">Edit</button></a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- </ul> --}}
            </div>
        </div>
    </div>
</x-app-layout>
