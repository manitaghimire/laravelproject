<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <b>name is {{$post->title}}</b>
                
                    <form action="{{route('posts.update',$post)}}" method="post" >
                        @csrf
                        @method('PUT')
                    <b>Title:</b><br>
                    <input type="text" value="{{$post->title}}" name="title" value="{{$post->title}}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                    <br><br>
                    <b>Text:</b><br>
                    <textarea name="text" id="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        {{$post->text}}
                    </textarea><br><br>

                    <select name="categoryid" >
                        @foreach ($categories as $category)
                        
                        <option value="{{$category->id}}" @if($post->Category_id==$category->id) selected @endif > {{$category->name}}</option>
                        
                        @endforeach
                        </select><br><br>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
