
<x-layout class="bg-gray-100">
    <div class="Container">
        <div class="text-center">
            <h2 class="text-2xl font-bold">Update your information</h2>
            <p class="text-md">Lorem ipsum, dolor consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{ url('/userData/' . $user->id . '/update') }}" method="POST" class="flex flex-col justify-center m-10">
            @csrf
            @method('PUT')

            <label for="">Title of   Story</label>
            <input type="text" name="Tstory" value="{{ $user->Tstory }}" class="border p-2 rounded-md bg-transparent">
            @error('Tstory')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Author</label>
            <input type="text" name="author" value="{{ $user->author }}" class="border p-2 rounded-md bg-transparent">
            @error('author')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Story</label>
            <textarea name="story" class="border p-2 rounded-md bg-transparent">{{ $user->story }}</textarea>
            @error('story')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <button type="submit" class="bg-black text-white p-2 rounded-full">Update</button>
        </form>
    </div>
</x-layout>