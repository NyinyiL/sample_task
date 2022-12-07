<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3>This is sample project</h3>

    <button class="btn" onclick="show()">Recording </button>

    <div class="show-record">
        <p class = "show-thing">Hi nyi, the task display the question a sentence for the answer have of recording button clicking it on I should be able to speak a recording the input and then display what I spoken that a task</p>
    </div>

    <button class="btn-2">Recording from Nyi</button>

    <div class="show-2">
        <p class="show-thing-2">
        PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code  which may be any type of data, such as generate HTML or binary image data
        </p>
    </div>

    
</body>

<script>



document.querySelector(".btn").addEventListener("click", function () {
    document.querySelector(".show-thing").style.display = "inline-block" ;
})

document.querySelector(".btn-2").addEventListener("click", function () {
    document.querySelector(".show-thing-2").style.display = "inline-block" ;
})

document.querySelector(".show-2").addEventListener("click", function () {
    document.querySelector(".show-thing-2").style.display = "none" ;
})

document.querySelector(".show-record").addEventListener("click", function () {
    document.querySelector(".show-thing").style.display = "none" ;
})



// document.querySelector(".btn").addEventListener("click", function () {
//     document.querySelector(".show-thing").style.display = "none" ;
// })

// function show() {
//     document.querySelector(".show-thing").style.display = "inline-block" ;
// }

// function show() {
//     document.querySelector(".gear-show").style.display = "none" ;
// }
</script>
</html>