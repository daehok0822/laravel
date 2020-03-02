<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>환영합니다</title>
    <style>
        h1{
            text-align: center;
            border-bottom: 3px solid black;
            margin: 0;
            padding: 20px;
        }
        #categories ul{
            margin: 0;
        }
        #categories{
            border-right: 3px solid black;
        }
        #cat_article{
            display: grid;
            grid-template-columns:200px 1fr ;
        }
    </style>

</head>
<body>
<h1>게임 사이트</h1>
<div id="cat_article">
    <div id="categories">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
    <div id="articles">

    </div>
</div>



</body>
</html>
