<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Menu Index</a>
            </div>
            <div class="p-2 m-2 rounded bg-slate-100">
                <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                    <form method="POST" action="{{ route('admin.menus.update',$menu->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $menu->name }}"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>

                            @error('name')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>

                            <div>
                                <img src="{{ Storage::url($menu->image) }}" alt="Min">
                            </div>

                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('image')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price" value="{{ $menu->price }}"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('price')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="pt-5 sm:col-span-6">
                            <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" name="description"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm appearance-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $menu->description }}</textarea>
                            </div>
                              @error('description')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="pt-5 sm:col-span-6">
                            <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                            <div class="mt-1">
                                <select id="categories" name="categories[]" class="block w-full mt-1 form-multiselect"
                                    multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                              @error('catrgories[]')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="p-4 mt-6">
                            <button type="submit"
                                class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Update Menu</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
