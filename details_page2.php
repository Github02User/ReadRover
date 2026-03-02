<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            width:100%;
            height:100%
            object-fit:contain;
            background-image: url(project/inaki-del-olmo-NIJuEQw0RKg-unsplash.jpg);
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: scale(1.05);
        }
        .book-cover {
            text-align: center;
        }

        .book-cover img {
            max-width: 100%;
            height: auto;
        }
        .book-cover img:hover{
            background: #000;
            transform: scale(1.05);
            transition:ease-in .3s
        }

        .book-description {
            margin-top: 20px;
        }
        h2{
            color:white;
            background-color: black;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<header>
        <h1>Holy Ghosts</h1>
    </header>
    <div class="container">
        <div class="book-cover">
            <img src="uploaded_img/holy_ghosts.jpg" class="image" alt="">
        </div>
        <div class="book-description">
            <h2>About the Book</h2>
            <p>
            A festering evil lurks in the grotesque carvings of a cathedral’s hallowed inner sanctum; sheltering in an Alpine chapel, a young libertine confronts his eerie monastic doppelgänger; locked in a Spanish cathedral, a honeymooning couple bears witness to a fatal procession. <br><br>

Churches and other sacred sites have inspired writers of the weird and uncanny for centuries as spaces in which death and the afterlife are within touching distance – where ghosts, demons and possessed effigies remain to haunt the living. Through eleven stories published between 1851 and 1935, this new anthology revives a throng of undying spirits from a host of unsung and classic authors including Elizabeth Gaskell, M. R. James, John Wyndham, and Edith Wharton.

            </p>
            
        </div>
    </div>
</body>
</html>