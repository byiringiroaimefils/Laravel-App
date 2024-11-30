<x-layout class="bg-gray-100">
        <div class="Container">
        <div class="text-center">
            <h2 class="text-2xl font-bold">UPLOAD YOUR STORY</h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{ url('userData') }}" method="POST" class="flex flex-col justify-center m-10">
            @csrf

            <label for="">Title of Story</label>
            <input type="text" name="Tstory" class="border p-2 rounded-md bg-transparent">
            @error('Tstory')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Author</label>
            <input type="text" name="author" class="border p-2 rounded-md bg-transparent">
            @error('author')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Type your story</label>
            <textarea cols="30" rows="10" name="story" class="border p-2 rounded-md bg-transparent"></textarea>
            @error('story')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>

            <button type="submit" class="bg-black text-white p-2 rounded-full">Submit</button>
        </form>
    </div>
</x-layout>





