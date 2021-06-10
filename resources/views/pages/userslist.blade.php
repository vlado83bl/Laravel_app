{{-- STYLING OF USERLIST BLADE IS IN  USERS.SCSS AND PROFILE.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="profile text-white">

        {{-- PERSONAL --}}
        <div class="personal personal__users">

            {{-- PERSONAL CATEGORIES --}}
            <div class="personal-categories">
                <p class="personal-categories__link personal-active ml-2">Users</p>
                <div class="personal-categories__search d-flex align-items-center">
                    <i class="fas fa-search ml-2 mr-3 mb-5"></i>
                    <input class="personal-categories__search--input" type="search" aria-label="Search through users" placeholder="Search">
                </div>
                <ul class="personal-categories__list align-items-start">
                    <li><a href="" class="personal-categories__link personal-active mb-3">1.<span class="mr-2"></span> {{'Adam Rodrigues'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">2.<span class="mr-2"></span> {{'Jim T. Walker'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">3.<span class="mr-2"></span> {{'Paul Taylor'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">4.<span class="mr-2"></span> {{'William Anderson'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">5.<span class="mr-2"></span> {{'Jones Tompson'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">6.<span class="mr-2"></span> {{'Wilson harris'}}</a></li>
                    <li><a href="" class="personal-categories__link mb-3">7.<span class="mr-2"></span> {{'Harry Poulham'}}</a></li>
                </ul>
            </div>

            {{-- PERSONAL INFO --}}
            <div class="personal__users--info-container d-flex flex-column" style="width: 100%;">
                <div class="personal__users--header pt-5 d-flex align-items-center">
                    <img class="personal__users--header-photo mr-3" src="{{ URL::to('/assets/img/user_photo_1.jpg') }}">
                    <p class="personal__users--header-text d-inline mb-0 personal-active">{{'Adam Rodrigues'}}</p>
                    <span class="personal__three-dots ml-auto">&#10247;</span>
                </div>
                {{-- PERSONAL IFO DATA --}}
                <div class="personal-info d-flex">
                    <div class="personal__users--info">
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">First name:</p>
                            <div class="input-field d-flex align-items-center"><p>{{'Adam'}}</p></div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">Last name:</p>
                            <div class="input-field d-flex align-items-center"><p>{{'Rodrigues'}}</p></div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">E-mail address:</p>
                            <div class="input-field d-flex align-items-center"><p>{{'adam.rod.1980@gmail.com'}}</p></div>
                        </div>
                        {{-- RADIO GROUP --}}
                        <div class="personal-info__field personal-info__field-radio d-flex align-items-center mb-4">
                            <p class="personal-info__field-radio-gender" style="flex: 0 0 30%;">Gender:</p>
                            <div class="d-flex align-items-center mr-5">
                                <span class="personal-info__field--radio-button radio-button__active mr-3"></span>
                                <p class="mb-0">Male</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="personal-info__field--radio-button mr-3"></span>
                                <p class="mb-0">Female</p>
                            </div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">Contact number:</p>
                            <div class="input-field d-flex align-items-center"><p>{{'+497262910233'}}</p></div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">E-mail address:</p>
                            <div class="input-field d-flex align-items-center" style="height: 9rem;"><p>{{'100 Guild Street,'}}<br>{{ 'London EC4N 6LW,'}}<br>{{ 'UK' }}</p></div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center mb-4">
                            <p class="label-field">Date of birth:</p>
                            <div class="input-field d-flex align-items-center"><p>{{'09/11/1980'}}</p></div>
                        </div>
                        <div class="personal-info__field d-flex align-items-center">
                            <p class="label-field">Conflict number:</p>
                            <div class="input-field d-flex align-items-center"><p>{{ 3 }}</p></div>
                        </div>
                    </div>
                    <div class="personal__users--ship ml-4">
                        <div class="personal__users--ship-box d-flex align-items-start">
                            <p class="personal-label"">Ship:</label>
                            <div class="personal__users--ship-data d-flex align-items-center">
                                <img class="personal__users--ship-photo mr-3" src="{{ URL::to('/assets/img/ship_photo.jpg') }}">
                                <div class="d-flex flex-column align-items-start ml-3">
                                    <p class="mb-1">{{'Blue Lagoon'}}</p>
                                    <p class="mb-1">Type: {{'Yacht'}}</p>
                                    <p class="mb-1">ID: {{'234TG78A'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
