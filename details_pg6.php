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
        <h1>The girl of ink and stars</h1>
    </header>
    <div class="container">
        <div class="book-cover">
            <img src="uploaded_img/the_girl_of_ink_and_stars.jpg" class="image" alt="">
        </div>
        <div class="book-description">
            <h2>About the Book</h2>
            <p>
            The Girl of Ink and Stars is a story of myth, magic and the power of friendship.
        <br><br>
Forbidden to leave her island, Isabella dreams of the faraway lands her father once mapped. When a girl from the village disappears into the island's Forgotten Territories, Isabella and her lifelong friend Pablo go in search of her.  
        <br><br>
Following her map and an ancient myth, Isabella discovers that deep beneath the dry rivers and smoky mountains, a fiery legend is stirring from its sleep... 
        </p>
            
        </div>
    </div>
</body>
</html>