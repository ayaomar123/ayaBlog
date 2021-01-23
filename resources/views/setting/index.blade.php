@extends('Admin.board')
@section('title','Social links')
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
             Social Links
        </h2>
    </div>
<div class="card" style="text-align:left;margin-top:30px">

    <table class="table table-hover" style="text-align:left;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">facebook</th>
                <th scope="col">twitter</th>
                <th scope="col">youtube</th>
                <th scope="col">instagram</th>
                <th scope="col">snapchat</th>
                <th scope="col">linkedin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($settings as $setting)
                    <tr>
                        <?php for($i=1;$i<$setting->id;$i++) ?>
                        <td> <?php echo $i;?> </td>
                        <td>{{ Str::limit($setting->facebook,10)}} </td>
                        <td>{{ Str::limit( $setting->twitter,10)}}</td>
                        <td>{{ Str::limit($setting->youtube,10)}}</td>
                        <td>{{ Str::limit($setting->instagram,10)}}</td>
                        <td>{{ Str::limit($setting->snapchat,10)}}</td>
                        <td>{{ Str::limit($setting->linkedin,10)}}</td>

                        <td>
                            <a href="{{ route('setting.edit',[$setting->id]) }}">Edit </a>
                            {{-- <form class="" action="{{ route('setting.delete',[$setting->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"class="btn btn-danger" name="button">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection

