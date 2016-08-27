@extends('layouts.admin')

@section('content')
    @include('layouts.success')
    @include('layouts.error')
        <h2>Vouchers History</h2>

            <table class="table">
                <thead>
                <tr>
                    <th>Voucher</th>
                    <th>Used</th>
                    <th>By</th>
                    <th>Quiz</th>
                    <th>Created At</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizs as $quiz)
                <tr>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->url }}</td>
                    <td>{{ $quiz->fee }}</td>
                    <td>{{ $quiz->minutes }}</td>
                    <td><a href="{{ $url = url('admin/quiz') }}/{{$quiz->id}}"> <i class="fa fa-pencil" title="Edit"></i></a><A href=""> <i class="fa fa-trash" title="Delete"></i></A></td>
                </tr>
                @endforeach

                </tbody>
         </table>
@stop
@section('footer')
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@stop