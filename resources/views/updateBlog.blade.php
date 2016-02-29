@extends('master')

@section('title', 'Update Blog')

@section('content')

<form action="{{ url('update/'.$article_id) }}" method="post" class="form" enctype='multipart/form-data'>

    @foreach($users as $user)
    <table>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" value="{{ $user->title }} "></td>
        </tr>

        <tr>
            <td>Description:</td>
            <td><textarea name="description" cols="60" rows="10">{{  $user->description }}</textarea></td>
        </tr>
        <tr>
            <td>Select Image</td>
            <td><img src="{{ asset('upload/'.$user->image_path) }}" height="20%" width="20%"><input type="file" name="image"></td>
        </tr>

        <tr>
            <td>Active From Date:</td>
            <td><input type="text" name="from_date" class="datepicker" value="{{  $user->active_from_date }}" ></td>
        </tr>

        <tr>
            <td>Active To Date:</td>
            <td><input type="text" name="to_date" class="datepicker" value="{{  $user->active_to_date }}" ></td>
        </tr>

        <tr>
            <td>Status:</td>
            <td><select name ="status">
                    @if($user->status  == 'Active')
                        <option selected >Active</option>
                        <option >Deactive</option>
                    @else
                        <option >Active</option>
                        <option selected >Deactive</option>
                        @endif
                </select></td>
        </tr>

        <tr>

            <td colspan="2">
                <input type="submit" name="submit" value="Update">
                <input type="hidden" name="image" value="{{ $user->image_path }}">
                <button type="button" name="cancel" value="Cancel" onclick="window.location='{{URL::action('adminController@index')}}'">Cancel</button>
            </td>
        </tr>
@endforeach
    </table>

</form>
@endsection