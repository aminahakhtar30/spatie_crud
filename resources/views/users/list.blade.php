<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
           
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message></x-message>
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr class="border-b">
                        <td class="px-6 py-3 text-left">#</td>
                        <td class="px-6 py-3 text-left">Name</td>
                        <td class="px-6 py-3 text-left">Email</td>
                        <td class="px-6 py-3 text-left">Roles</td>
                        <td class="px-6 py-3 text-left">Created</td>
                        <td class="px-6 py-3 text-center">Action</td>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @if ($users->isNotEmpty())
                        @foreach ($users as $user)
                            <tr class="border-b">
                                <td class="px-6 py-3 text-left">{{ $user->id }}</td>
                                <td class="px-6 py-3 text-left">{{ $user->name }}</td>
                                <td class="px-6 py-3 text-left">{{ $user->email}}</td>
                                <td class="px-6 py-3 text-left">{{ $user->roles->pluck('name')->implode(', ')}}</td>
                             
                                <td class="px-6 py-3 text-left">
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}
                                </td>
                                @can('edit users')
                                <td class="px-6 py-3 text-center">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="bg-slate-700 text-sm rounded-md text-white px-3 py-2 hover:bg-slate-600">Edit</a>
                                </td>
                                @endcan
                                <!-- <td class="px-6 py-3 text-center">
                                    <a href="javascript:void(0);" onclick="deleteUser({{ $user->id }})"
                                        class="bg-red-600 text-sm rounded-md text-white px-3 py-2 hover:bg-slate-500">Delete</a>
                                </td> -->
                               
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="my-3">
                {{$users->links()}}
</div>
        </div>
    </div>

     <!-- Move the script block outside -->
    
</x-app-layout>
