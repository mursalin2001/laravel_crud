<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="max-w-4xl mx-auto p-4">
        <h2 class="text-3xl font-semibold mb-6 text-center">Animal Submission Form</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <!-- Animal Type -->
            <div class="mb-4">
                <label for="animal_type" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-paw mr-2"></i> Animal Type
                </label>
                <select id="animal_type" name="animal_type" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                    <option value="other">Others</option>
                </select>
            </div>

            <!-- Condition -->
            <div class="mb-4">
                <label for="condition" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-heartbeat mr-2"></i> Approximate Condition
                </label>
                <select id="condition" name="condition" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="injured">Injured</option>
                    <option value="sick">Sick</option>
                    <option value="abandoned">Abandoned</option>
                    <option value="healthy_lost">Healthy but lost</option>
                </select>
            </div>

            <!-- Location (Google Maps API / Manual Address) -->
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-map-marker-alt mr-2"></i> Location
                </label>
                <input type="text" id="location" name="location" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter location or use Google Maps">
                <!-- Google Maps Embed or API can go here -->
            </div>

            <!-- Photo/Video Upload -->
            <div class="mb-4">
                <label for="animal_media" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-camera mr-2"></i> Upload Photo/Video
                </label>
                <input type="file" id="animal_media" name="animal_media[]" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*,video/*" multiple required>
            </div>

            <!-- Additional Notes -->
            <div class="mb-4">
                <label for="additional_notes" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-pen mr-2"></i> Additional Notes (Optional)
                </label>
                <textarea id="additional_notes" name="additional_notes" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="E.g., bleeding, broken leg, can't move, scared, etc."></textarea>
            </div>

            <!-- Submitted By (Optional) -->
            <div class="mb-4">
                <label for="submitted_by" class="block text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-user mr-2"></i> Submitted By (Optional)
                </label>
                <input type="text" id="submitted_by" name="submitted_by" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Name">
                <input type="text" id="contact_number" name="contact_number" class="mt-2 block w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contact Number">
            </div>

            <!-- Submit Button -->
            <div class="mb-4 text-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md focus:outline-none hover:bg-blue-600 transition duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>


