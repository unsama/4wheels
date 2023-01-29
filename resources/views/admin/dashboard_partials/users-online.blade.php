
<div class="bg-white shadow-sm sm:rounded-lg">
<div class="users-activity-card py-6 flex flex-row">
    <div class="online-users bg-white rounded-sm w-80 px-6 py-8">
        <p class="mb-4 font-semibold text-xl text-gray-800 leading-tight">Online</p>

        <div class="users-list">
            @php
            $users = ['omair','wahid','zeeshan','sufia'];
            @endphp

            @foreach($users as $user)
                <div class="user">
                    <div class="avatar">
                        <img class="rounded-l" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="content">
                        <p class="name">{{$user}}</p>
                        <p class="department">Development</p>
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-xs leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    Actions
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Breakin') }}
                                    </x-dropdown-link>
                                </form>
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Checkout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="breaking-users bg-white rounded-sm w-80 px-6 py-8">
        <p class="mb-4 font-semibold text-xl text-gray-800 leading-tight">On Break</p>

        <div class="users-list">
            @php
                $users = ['omair','wahid','zeeshan','sufia'];
            @endphp

            @foreach($users as $user)
                <div class="user">
                    <div class="avatar">
                        <img class="rounded-l" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="content">
                        <p class="name">{{$user}}</p>
                        <p class="department">Development</p>
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-xs leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    Actions
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Breakin') }}
                                    </x-dropdown-link>
                                </form>
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Checkout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="absent-users bg-white rounded-sm w-80 px-6 py-8">
        <p class="mb-4 font-semibold text-xl text-gray-800 leading-tight">Absent</p>
        <div class="users-list">
            @php
                $users = ['omair','wahid','zeeshan','sufia'];
            @endphp

            @foreach($users as $user)
                <div class="user">
                    <div class="avatar">
                        <img class="rounded-l" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="content">
                        <p class="name">{{$user}}</p>
                        <p class="department">Development</p>
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-xs leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    Actions
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Breakin') }}
                                    </x-dropdown-link>
                                </form>
                                <form method="POST" action="">
                                    @csrf
                                    <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Checkout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
</div>
