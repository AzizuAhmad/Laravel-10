<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('HomePage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-accent-focus">
            <div class="card-body" >
            <form action="{{ route('posts.store')}}" method="post">
                @csrf
                <textarea name="content" placeholder="Apa yang Kamu Pikirkan" class="textarea textarea-bordered w-full" rows="3"></textarea>
                <input type="submit" class="btn btn-primary" value="Posting">  
            </form>
          
          </div>
            </div>
         
        </div>
    </div>
</x-app-layout>
