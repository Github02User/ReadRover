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
        h2{
            color:white;
            background-color: black;
        }
        .book-description {
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<header>
        <h1>Bash and Lucy</h1>
    </header>
    <div class="container">
        <div class="book-cover">
            <img src="uploaded_img/bash_and_lucy-2.jpg" class="image" alt="">
        </div>
        <div class="book-description">
            <h2>About the Book</h2>
            <p>
            "Another wonderful tale by the dynamic mother/son writing team, Lisa and Michael Cohn. This is a book for dog lovers and for those interested in Ukraine, the native land of one of the most lovable characters, Grandma Vera. One of my favorite scenes is where Grandma Vera works to get the town renamed to 'Woof-Woof Nation.' She says 'By naming the town Woof-Woof Nation, we change everything. We learn how to be good citizens. We teach people to act like a dog.' Pure gold!" (From Amazon Review).

        <br><br>

"Overall, Bash and Lucy Say, 'Love, Love, Bark!' is a charming and uplifting story that encourages readers to embrace the goodness of dogs and the value of kindness. I highly recommend this book to parents, teachers, and anyone who wants to share an important message with children."
            </p>
            
        </div>
    </div>
</body>
</html>