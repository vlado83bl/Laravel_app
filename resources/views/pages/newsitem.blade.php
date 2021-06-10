{{-- STYLING OF NEWSITEM BLADE IS IN  ACTIVITIES.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="newsitem">
        <div class="newsitem__header">
            <p>Add news</p>
        </div>
        <div class="newsitem__main d-flex flex-column align-items-center">
            <div class="newsitem__main--field">
                <label class="newsitem__main--field-label" for="title">Title:</label>
                <input class="newsitem__main--field-input" type="text" id="title" placeholder="Type title">
            </div>
            <div class="newsitem__main--field">
                <label class="newsitem__main--field-label" for="subtitle">Subtitle:</label>
                <input class="newsitem__main--field-input" type="text" id="subtitle" placeholder="Type subtitle">
            </div>
            <div class="newsitem__main--field">
                <label class="newsitem__main--field-label" for="date">Date:</label>
                <input class="newsitem__main--field-input" type="date" id="date" placeholder="10/19/2020">
            </div>
            <div class="newsitem__main--field align-items-start">
                <label class="newsitem__main--field-label pt-1" for="description">Description:</label>
                <textarea class="newsitem__main--field-input newsitem__main--field-input-description" type="text" id="description" placeholder="Type description" style="height: 30rem;"></textarea>
            </div>
            <div class="newsitem__upload d-flex align-items-center mt-4 mb-5">
                <p class="font-weight-bold u-text-muted-dark">Upload newsitem:</p>
                <form action="/action_page.php">
                    <label class="newsitem__upload--label text-white" for="file-upload">...Choose file from your PC</label>
                    <input class="newsitem__upload--input" id="file-upload"   type="file">
                </form>
            </div>
            <div class="text-center">
                <button class="btn btn-primary py-2 px-4" style="font-size: 1.2rem;">Publish</button>
            </div>
        </div>
    </div>
@endsection
