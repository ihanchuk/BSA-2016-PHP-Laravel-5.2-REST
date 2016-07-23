<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .formholder{
                padding: 20px;
                margin-bottom: 20px;
                background-color: #e8e8e8;
             }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="formholder">
                    <h3>Create Book entity</h3>
                        {!! Form::open(array('url' => 'books/create', 'method' => 'get')) !!}
                        <input type="text"  name="year" placeholder="year">
                        <input type="text"  name="author" placeholder="author">
                        <input type="text"  name="genre" placeholder="genre">
                        <input type="text"  name="title" placeholder="title">

                        <input type="submit"  value="create book">
                        {!! Form::close() !!}
                </div>
                <div class="formholder">
                    <h3>Delete Book entity with id 1</h3>
                       {!!  Form::open([ 'method'  => 'delete', 'url' => "/books/1"]) !!}
                         <input type="submit"  value="delete book">
                        {!! Form::close() !!}
                </div>
                <div class="formholder">
                    <h3>Show book info with id 7</h3>
                    {!!  Form::open([ 'method'  => 'get', 'url' => "/books/7"]) !!}
                        <input type="submit"  value="show book">
                    {!! Form::close() !!}
                </div>
                <div class="formholder">
                    <h3>Show users of book with id 7</h3>
                    {!!  Form::open([ 'method'  => 'get', 'url' => "/books/7/users/0"]) !!}
                    <input type="submit"  value="show book">
                    {!! Form::close() !!}
                </div>
                <div class="formholder">
                    <h3>Set user for book with id 1</h3>
                    {!!  Form::open([ 'method'  => 'put', 'url' => "/books/1/users/1"]) !!}
                    <input type="submit"  value="show book">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </body>
</html>
