<?php

include '../PHP/templates/header.tpl.php';

?>

<h1 class="title-other_pages"><span>J|M|D</span> web development</h1>
    <h1><span>c</span>ontact me</h1>
        <main>
            <body>
                    <form action="" method="post">
                        <fieldset>
                            <div>
                                <label for="firstname">your first name:</label>
                                <input type="text" name="firstname" value="">
                                
                            </div>
                            <div>
                                <label for="lastname">your last name:</label>
                                <input type="text" name="lastname" value="">
                                
                            </div>
                            <div>
                                <label for="web_pages">how many web pages do you want to create?</label>
                                <input type="number" name="web_pages" value="web_pages">
                                
                            </div>
                            <div>
                                <label for="details">your needs/specifications</label>
                                <textarea name="details" id="details" cols="30" rows="5"></textarea>                                
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
                           
                    </fieldset>
                </form>

                <?php         
                if (!empty($_POST)) {
                    $first = $_POST['firstname'];
                    $last = $_POST['lastname'];
                    $webPages = $_POST['web_pages'];
                    $details = $_POST['details'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    } else {
                    echo "Please fill the form!";
                    }
                ?>
            </body>
        </main>
    <footer>
        <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis atque sint quod, fuga voluptas voluptates in cupiditate accusamus asperiores unde repudiandae illo ipsum praesentium, at voluptatum! Ad non eius tempore, enim architecto aliquid voluptas nobis magnam quod pariatur hic nostrum!</p>

    </footer>
</html>