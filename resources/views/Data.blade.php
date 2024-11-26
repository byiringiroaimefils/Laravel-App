
<x-layout class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="text-center">
            <h2 class="text-2xl font-bold">All User's Information</h2>
            <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div><br><br>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Title</th>
                    <th class="py-2">Author</th>
                    <th class="py-2">Story</th>
                    <th class="py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->Tstory }}</td>
                        <td class="border px-4 py-2">{{ $user->author }}</td>
                        <td class="border px-4 py-2">{{ $user->story }}</td>
                        <td class="border px-4 py-3">
                            <a class="text-blue-500" href="{{ url('/userData/' . $user->id . '/edit') }}">Edit</a>
                            <a class="text-red-500" href="{{ url('/userData/' . $user->id . '/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
