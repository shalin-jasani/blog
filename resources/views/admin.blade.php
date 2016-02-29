@extends('master')

@section('title', 'Admin')

@section('content')

        <div id="container">
            <form action="search" method="post" id="search">
                <input type="text" name="search" placeholder="Search By Title"/>
                <button type="submit">Search</button>
                <button type="submit"  onclick="{{ redirect()->back() }}">Reset</button>
            </form>
        </div>
    </div>

@if((count($errors) == 0))
    <table  border=1 >
    <tr>
        <th width="2%">ID</th>
        <th width="8%">Title</th>
        <th width="45%">Description</th>
        <th width="15%">Active From Date</th>
        <th width="15%">Active To Date</th>
        <th width="7%">Status</th>
        <th width="8%">Action</th>
    </tr>
    @foreach($users as $user)

    <tr>
        <td>{{  $user->id }}</td>
        <td>{{  $user->title }}</td>
        <td>{{  $user->description }}</td>
        <td>{{  $user->active_from_date }}</td>
        <td>{{  $user->active_to_date }}</td>
        <td>{{  $user->status }}</td>
        <td>
            <a  href="{{ url('updateBlog/'.$user->id) }}" title="Click To Edit" ><img src="{{ asset('images/edit.png') }}" height="30%" width="30%"></a>  |
            <a  href="{{ url('deleteBlog/'.$user->id) }}" title="Click To Delete" onclick="return confirm('Are you sure want to delete this record? ');" ><img src="{{ asset('images/delete.png') }}" height="30%" width="30%"></a>
            {{--<a href="{{ url('delete/'.$user->id) }}" title="Click To Delete" data-method="delete" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><img src="{{ asset('images/delete.png') }}" height="30%" width="30%"></a>--}}
        </td>
    </tr>
    @endforeach
   </table>

        <div align="center">{!! $users->links() !!}</div>
@endif
@endsection

