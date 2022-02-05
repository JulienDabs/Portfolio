<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jmd web development</title>

    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <nav>
        <ul>
            <li><a href=""></a>home</li>
            <li><a href=""></a>lastest projects</li>
            <li><a href=""></a>testimonials</li>
            <li><a href=""></a>about me</li>
            <li><a href=""></a>contact</li>
        </ul>
    </nav>

</head>

    <h1>contact me</h1>
        <main>
            <body>
                
                    <form action="" method="post">
                        <fieldset>
                            <div>
                                <label for="firstname">your first name:</label>
                                <input type="text" name="firstname" value="firstname">
                                
                            </div>
                            <div>
                                <label for="lastname">your last name:</label>
                                <input type="text" name="lastname" value="lastname">
                                
                            </div>
                            <div>
                                <label for="web_pages">how many web pages do you want to create?</label>
                                <input type="number" name="web_pages" value="web_pages">
                                
                            </div>
                            <div>
                                <label for="details">your needs/specifications</label>
                                <textarea name="details" id="details" cols="30" rows="10">i need...</textarea>
                                
                                
                            </div>
                            <div>
                                <label for="tel">your phone number</label>
                                <input type="tel" name="tel" id="tel">
                                
                            </div>
                            <div>
                                <label for="email">my email is:</label>
                                <input type="email" name="email" id="email">
                            </div>
                                <button>Submit your information</button>
                            <?php 
                            
                            var_dump($_POST);

                            if (!empty($_POST)) {

                                $first = $_POST['firstname'];
                                $last = $_POST['lastname'];
                                $webPages = intval($_POST['web']);
                                $details = $_POST['details'];
                                $tel = $_POST['tel'];
                                $email = $_POST['email'];

                             } else {

                                echo "Please fill the form";

                                }

                          
                            
                            
                            ?>
                    </fieldset>
                </form>
            </body>
        </main>
    <footer>
        <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis atque sint quod, fuga voluptas voluptates in cupiditate accusamus asperiores unde repudiandae illo ipsum praesentium, at voluptatum! Ad non eius tempore, enim architecto aliquid voluptas nobis magnam quod pariatur hic nostrum!</p>

    </footer>
</html>