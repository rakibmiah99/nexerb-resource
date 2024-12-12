@extends('layouts.app')
@section('content')
    <div class="p-4">
        <div class="card">
            <x-card-header :can-create="true" name="Create Course Topic Data" :url="route('course_topic_data.index')" url-name="back"/>
            <form action="{{route('course_topic_data.store')}}" method="post" class="card-body" enctype="multipart/form-data">
                @csrf
                @include('course-topic-data.form_data')

                <div class="mb-3 row">
                    <label for="html5-datetime-local-input" class="col-md-2 col-form-label"></label>
                    <button type="submit" class="btn btn-primary col-2">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection