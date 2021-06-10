{{-- STYLING OF JOBS BLADE IS IN  USERS.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="job">
        <div class="job__header">
            <p>Add job</p>
        </div>
        <div class="job__main d-flex align-items-start">
            <div class="job__main--left">
                <div class="job__main--field">
                    <label class="job__main--field-label" for="title">Title:</label>
                    <input class="job__main--field-input" type="text" id="title" placeholder="Type title">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="subtitle">Subtitle:</label>
                    <input class="job__main--field-input" type="text" id="subtitle" placeholder="Type subtitle">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="date">Date:</label>
                    <input class="job__main--field-input" type="date" id="date" placeholder="10/19/2020">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="location">Location:</label>
                    <input class="job__main--field-input" type="text" id="location" placeholder="Type location">
                </div>
                <div class="job__main--field align-items-start">
                    <label class="job__main--field-label pt-1" for="description">Description:</label>
                    <textarea class="job__main--field-input job__main--field-input-description" type="text" id="description" placeholder="Type description" style="height: 30rem;"></textarea>
                </div>
            </div>
            <div class="job__main--right">
                <div class="job__main--field">
                    <label class="job__main--field-label" for="status">Status:</label>
                    <input class="job__main--field-input" type="text" id="status" placeholder="Urgently">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="salary">Salary:</label>
                    <input class="job__main--field-input" type="text" id="salary" placeholder="Type salary">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="benefits">Benefits:</label>
                    <input class="job__main--field-input" type="text" id="benefits" placeholder="Type benefits">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="type">Type:</label>
                    <input class="job__main--field-input" type="text" id="type" placeholder="One site">
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="qualifications">Qualifications:</label>
                    <textarea class="job__main--field-input job__main--field-input-qualifications" type="text" id="qualifications" placeholder="Type qualifications" style="height: 15rem;"></textarea>
                </div>
                <div class="job__main--field">
                    <label class="job__main--field-label" for="website">Location:</label>
                    <input class="job__main--field-input" type="url" id="website" placeholder="Type web site">
                </div>
                <div class="job__upload d-flex align-items-center mt-4 mb-5">
                    <p class="font-weight-bold u-text-muted-dark">Upload job:</p>
                    <form action="/action_page.php">
                        <label class="job__upload--label text-white" for="file-upload">...Choose file from your PC</label>
                        <input class="job__upload--input" id="file-upload"   type="file">
                    </form>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-primary py-2 px-4 mt-5" style="font-size: 1.2rem;">Publish</button>
                </div>
            </div>
        </div>
    </div>
@endsection
