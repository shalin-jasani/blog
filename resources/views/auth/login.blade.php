@extends('master')

@section('title', 'Login')

@section('content')

    <div class="heading">Log In</div>
    <form action="{{ url('login') }}" method="post" class="form">

        <table>
            <tr>
                <td>Email-Id : </td>
                <td><input type="email" name="username" required class="tect"  /> </td>
            </tr>


            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" required class="tect" /> </td>
            </tr>

            <tr align="center">

                <td colspan="2"> <input type="submit" name="submit" value="Log-In" class="tect" /></td>

            </tr>
        </table>

    </form>


@endsection
