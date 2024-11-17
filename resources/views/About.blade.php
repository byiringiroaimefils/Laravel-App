<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Documentation</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav>
        <ul class="flex justify-center gap-5 pt-5 font-extrabold">
            <li><a href="/" class="">Home</a></li>
            <li><a href="/userData" class="">User</a></li>
            <li><a href="/About" class="">Docum.</a></li>
        </ul>
    </nav>

    <main class="container mx-auto mt-10 px-4">
        <div class="text-center">
            <h2 class="text-2xl font-bold">CRUD Operation Documentation</h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Create</h2>
            <p class="mb-2">To create a new record:</p>
            <ol class="list-decimal list-inside">
                <li>Navigate to the "Create" page</li>
                <li>Fill out the required fields in the form</li>
                <li>Click the "Submit" or "Create" button</li>
            </ol>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Read</h2>
            <p class="mb-2">To view existing records:</p>
            <ul class="list-disc list-inside">
                <li>Go to the main listing page to see all records</li>
                <li>Use the search or filter options to find specific records</li>
                <li>Click on a record to view its details</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Update</h2>
            <p class="mb-2">To update an existing record:</p>
            <ol class="list-decimal list-inside">
                <li>Find the record you want to update</li>
                <li>Click the "Edit" or "Update" button</li>
                <li>Modify the fields as needed</li>
                <li>Click "Save" or "Update" to confirm changes</li>
            </ol>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Delete</h2>
            <p class="mb-2">To delete a record:</p>
            <ol class="list-decimal list-inside">
                <li>Locate the record you want to delete</li>
                <li>Click the Delete button</li>
            </ol>
            <p class="mt-2 text-red-600">Warning: Deletion is permanent and cannot be undone.</p>
        </section>
    </main>
</body>

</html>
