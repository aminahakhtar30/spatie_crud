<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
          Articles / Create
</h2>
<a href="{{ route('articles.index') }}"  class="bg-slate-700 text-sm rounded-md text-white px-3 py-2">Back</a>

</div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('articles.store')}}" method="post">
                    @csrf
                    <div>
                        <label for="" class="text-lg font-medium">Title</label>
                        <div class="my-3">
                            <input value="{{old('title')}}" name="title" placeholder="title" type="text" class="border-gray-300 shabow-sm w-1/2 rounded-lg">
                            @error('title')
                             <p class="text-red-400 font-medium">{{$message}}</p>
                            @enderror
                        </div>


                        <label for="" class="text-lg font-medium">Content</label>
                        <div class="my-3">
                            <textarea name="text" placeholder="content" id="text" class="border-gray-300 shabow-sm w-1/2 rounded-lg" cols="30" rows="">{{old('text')}}</textarea>
                        </div>



                        <label for="" class="text-lg font-medium">Author</label>
                        <div class="my-3">
                            <input value="{{old('author')}}" name="author" placeholder="Author" type="text" class="border-gray-300 shabow-sm w-1/2 rounded-lg">
                            @error('author')
                             <p class="text-red-400 font-medium">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="bg-slate-700 text-sm rounded-md text-white px-5 py-3">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
