@extends('master')

@section('title', 'Insert Blog')

@section('content')



    <div class="heading">Create Your New Blog Article</div>

    <form action="insertBlog" method="post" class="form" enctype='multipart/form-data'>

        <table>
            <tr>
                <td>Enter Title</td>
                <td><input type="text" name="title" ></td>
            </tr>

            <tr>
                <td>Enter Description</td>
                <td><textarea name="description" cols="60" rows="20" ></textarea></td>
            </tr>

            <tr>
                <td>Select Image</td>
                <td><input type="file" name="image" ></td>
            </tr>

            <tr align="center" >
                <td colspan="2">{{ $message = Session::get('message') }}</td>
            </tr>
            <tr align="center">

                <td colspan="2"><input type="submit" name="submit" value="Submit" class="tect">
                  <input type="submit" value="Cancel" onclick="{{ redirect()->back() }}"></input></td>
            </tr>

        </table>

    </form>



@endsection