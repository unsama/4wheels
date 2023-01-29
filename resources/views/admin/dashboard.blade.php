<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <form method="post" action="{{ url('/') }}/admin/dashboard" enctype="multipart/form-data">
                @csrf

                <div>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Add A Post') }}
                        </h2>
                    </header>

                    @if (session('status') === 'post-added')
                       <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 5000)"
                            class="text-sm text-gray-600 bg-green-500"
                        >Post Added Successfully...</p>
                    @endif

                    @if (session('status') === 'post-failed')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 5000)"
                            class="text-sm text-gray-600"
                        >{{session('status')}}</p>
                    @endif

                    <div class="">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <x-text-input id="thumbnail" name="thumbnail" type="file" style="position:static; opacity:1;" class="mt-1 block w-full" autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>


                    <div>
                        <x-input-label for="category" :value="__('category')" />
                        <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" autocomplete="category" />
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="title" :value="__('title')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('description')" />
                        <textarea id="description" name="description" type="text" class="mt-1 block w-full" autocomplete="description" rows="10"></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="excerpt" :value="__('excerpt')" />
                        <x-text-input id="excerpt" name="excerpt" type="text" class="mt-1 block w-full" autocomplete="excerpt" rows="4"/>
                        <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="keywords" :value="__('keywords')" />
                        <x-text-input id="keywords" name="keywords" type="text" class="mt-1 block w-full" autocomplete="keywords" />
                        <x-input-error :messages="$errors->get('keywords')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="tags" :value="__('tags')" />
                        <x-text-input id="tags" name="tags" type="text" class="mt-1 block w-full" autocomplete="tags" />
                        <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="author_name" :value="__('author_name')" />
                        <x-text-input id="author_name" name="author_name" type="text" class="mt-1 block w-full" autocomplete="author_name" />
                        <x-input-error :messages="$errors->get('author_name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="author_image" :value="__('author_image')" />
                        <x-text-input id="author_image" name="author_image" type="file" style="position:static; opacity:1;" class="mt-1 block w-full" autocomplete="author_image" />
                        <x-input-error :messages="$errors->get('author_image')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="meta_title" :value="__('meta_title')" />
                        <x-text-input id="meta_title" name="meta_title" type="text" class="mt-1 block w-full" autocomplete="meta_title" />
                        <x-input-error :messages="$errors->get('meta_title')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="meta_description" :value="__('meta_description')" />
                        <x-text-input id="meta_description" name="meta_description" type="text" class="mt-1 block w-full" autocomplete="meta_description" rows="4"/>
                        <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="meta_slug" :value="__('meta_slug')" />
                        <x-text-input id="meta_slug" name="meta_slug" type="text" class="mt-1 block w-full" autocomplete="meta_slug" />
                        <x-input-error :messages="$errors->get('meta_slug')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="meta_image" :value="__('meta_image')" />
                        <x-text-input id="meta_image" name="meta_image" type="file" style="position:static; opacity:1;" class="mt-1 block w-full" autocomplete="meta_image" />
                        <x-input-error :messages="$errors->get('meta_image')" class="mt-2" />
                    </div>

                    <div class="mt-12">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>


                    </div>

                </div>

            </form>
        </div>
    </div>

</x-admin-layout>
