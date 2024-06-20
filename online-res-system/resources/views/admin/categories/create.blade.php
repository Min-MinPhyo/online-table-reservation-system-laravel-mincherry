<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.categories.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Category Index</a>
            </div>
            <div class="p-2 m-2 rounded bg-slate-100">
                <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5 @error('name') border-red-700 @enderror"/>
                            </div>

                            @error('name')

                            <div class="text-sm text-red-700">{{ $message }}</div>

                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5 @error('image') border-red-700 @enderror" />
                            </div>


                            @error('image')

                            <div class="text-sm text-red-700">{{ $message }}</div>

                            @enderror

                        </div>
                        <div class="pt-5 sm:col-span-6">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm appearance-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('description') border-red-700 @enderror"></textarea>
                            </div>
                            @error('description')
                            <div class="text-sm text-red-700">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="p-4 mt-6">
                            <button type="submit"
                                class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Store</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
