{{-- STYLING OF VESSELS BLADE IS IN  ASSETS.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="vessels">
        <div class="vessels__search mb-5 d-flex align-items-center">
            <i class="fas fa-search vessels__search--input-icon"></i>
            <input class="vessels__search--input" type="search" aria-label="Search through vessels" placeholder="Search">
            <span class="vesells__search--input-add ml-auto">+</span>
        </div>
        <div class="vessels__header d-flex align-items-center mb-4">
            <div class="vessels__header--title text-center" style="flex: 0 0 30%">
                <p>Ship</p>
            </div>
            <div class="vessels__header--title" style="flex: 0 0 30%">
                <p>Coordinates</p>
            </div>
            <div class="vessels__header--title" style="flex: 0 0 15%">
                <p>Time</p>
            </div>
            <div class="vessels__header--title" style="flex: 0 0 15%">
                <p>Date</p> 
            </div>
        </div>
        <div class="vessels__list d-flex flex-column">
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">1.</span>{{'The Chilcompton'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'17.23568142'}} lon {{'22.25874698'}}</p>
                <p class="vessels__list--item-time">{{'14:00'}}</p>
                <p class="vessels__list--item-date">{{'10/13/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">2.</span>{{'Blue Lagune'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'07.23568142'}} lon {{'222.25874698'}}</p>
                <p class="vessels__list--item-time">{{'09:00'}}</p>
                <p class="vessels__list--item-date">{{'10/13/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">3.</span>{{'Sea Senora'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'17.23568142'}} lon {{'22.25874698'}}</p>
                <p class="vessels__list--item-time">{{'22:00'}}</p>
                <p class="vessels__list--item-date">{{'10/12/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">4.</span>{{'The Zartan'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'17.23568142'}} lon {{'22.25874698'}}</p>
                <p class="vessels__list--item-time">{{'06:00'}}</p>
                <p class="vessels__list--item-date">{{'10/11/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">5.</span>{{'Windsoar Vas'}}t</p>
                <p class="vessels__list--item-coordinates">lat {{'17.23568142'}} lon {{'99.25874698'}}</p>
                <p class="vessels__list--item-time">{{'10:00'}}</p>
                <p class="vessels__list--item-date">{{'10/10/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">6.</span>{{'Pointe Claire'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'17.23568142'}} lon {{'22.25874698'}}</p>
                <p class="vessels__list--item-time">{{'12:00'}}</p>
                <p class="vessels__list--item-date">{{'10/10/2020'}}</p>
            </div>
            <div class="vessels__list--item d-flex align-items-center">
                <p class="vessels__list--item-ship"><span class="vessels__list--item-number">7.</span>{{'Wind IXX'}}</p>
                <p class="vessels__list--item-coordinates">lat {{'44.23568142'}} lon {{'02.25874698'}}</p>
                <p class="vessels__list--item-time">{{'12:00'}}</p>
                <p class="vessels__list--item-date">{{'10/10/2020'}}</p>
            </div>
        </div>
        <div class="vessels__upload d-flex align-items-center my-4">
            <p class="ml-5 font-weight-bold u-text-muted-dark">Upload vessels:</p>
            <form action="/action_page.php">
                <label class="vessels__upload--label text-white" for="file-upload">...Choose file from your PC</label>
                <input class="vessels__upload--input" id="file-upload" class="ml-5" type="file">
            </form>
        </div>
        <div class="vessels__pagination d-flex my-5">
            <div class="vessels__pagination--list ml-auto">
                <a href="#" class="vessels__pagination--prev">&larr;</a>
                <a href="#" class="vessels__pagination--item active">1</a>
                <a href="#" class="vessels__pagination--item" class="active">2</a>
                <a href="#" class="vessels__pagination--item">3</a>
                <a href="#" class="vessels__pagination--item">4</a>
                <a href="#" class="vessels__pagination--item">5</a>
                <a href="#" class="vessels__pagination--item">6</a>
                <a href="#" class="vessels__pagination--next">&rarr;</a>
            </div>
        </div>
    </div>
@endsection
