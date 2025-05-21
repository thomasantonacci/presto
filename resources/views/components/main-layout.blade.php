<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} - {{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&family=Underdog&display=swap" rel="stylesheet">
</head>
<body>
    <x-shared.navbar />
    
    <div class="py-5">
         {{$slot}}
    </div>
       
    
    
         
    
   
    <x-shared.footer />
</body>
</html>