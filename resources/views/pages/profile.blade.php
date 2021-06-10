@extends('layouts/app')

@section('content')
    <div class="profile text-white">

        {{-- PROFILE HEADER --}}
        <div class="profile__header d-flex align-items-center">
            <img class="profile__header--user-photo mr-5" src="{{ URL::to('/assets/img/user_photo.jpg') }}">
            <span class="profile__header--user-photo-notification"></span>
            <div class="profile__header--user d-flex flex-column align-items-start pr-4">
                <p class="profile__header--user-name text-white">{{'John Smith'}}</p>
                <p class="profile__header--user-mail">{{'john.smith.dvc@admin.com'}}</p>
            </div>

            {{-- PROFILE DATA --}}
            <div class="profile__header--data ml-auto">
                <div class="profile__header--data-1 d-flex flex-column align-items-start">

                    {{-- OGLEDNI PRIMJER --}}
                    <div class="wrapper d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone mr-4"></i>
                        <div class="profile__header--data-contact d-flex flex-column">   
                        <p class="profile__header--data-contact-text">Contact: <br><span>{{ '+41728304099' }}</span></p>
                         </div>
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-center mt-3">
                        <i class="fas fa-map-marker-alt mr-4"></i>
                        <div class="profile__header--data-contact">
                            <p class="profile__header--data-contact-text mb-0">Adress: <br> <span>{{'Not available'}}</span></p>
                        </div> 
                    </div>
                </div>
                <div class="profile__header--data-2 d-flex flex-column align-items-start">
                    <div class="wrapper d-flex align-items-center justify-content-center">
                        <i class="fas fa-calendar-week mr-4"></i>
                        <div class="profile__header--data-contact d-flex flex-column">
                            <p class="profile__header--data-contact-text">Created: <br> <span>{{'10/08/2020'}}</span></p>
                        </div> 
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-center mt-3">
                        <i class="fas fa-gift mr-4"></i>
                        <div class="profile__header--data-adress">
                            <p class="profile__header--data-contact-text mb-0">Date of Birth: <br> <span>{{'29/02/1990'}}</span></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        {{-- PERSONAL --}}
        <div class="personal">

            {{-- PERSONAL CATEGORIES --}}
            <div class="personal-categories">
                <ul class="personal-categories__list align-items-start">
                    <li><a href="" class="personal-categories__link mb-3 personal-active">Personal Info</a></li>
                    <li><a href="" class="personal-categories__link mb-3">Settings</a></li>
                    <li><a href="" class="personal-categories__link mb-3">Log Out</a></li>
                </ul>
            </div>

            {{-- PERSONAL INFO --}}
            <div class="personal-info">
                <p class="personal-active mt-2" style="margin-bottom: 2rem">Personal Info</p>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">First name:</p>
                    <div class="input-field d-flex align-items-center"><p>{{'John'}}</p></div>
                </div>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">Last name:</p>
                    <div class="input-field d-flex align-items-center"><p>{{'Smith'}}</p></div>
                </div>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">E-mail address:</p>
                    <div class="input-field d-flex align-items-center"><p>{{'john.smith.dvc@admin.com'}}</p></div>
                </div>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">Contact number:</p>
                    <div class="input-field d-flex align-items-center"><p>{{'+41728304099'}}</p></div>
                </div>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">Address:</p>
                    <div class="input-field d-flex align-items-start" style="height: 9rem"><p class="mt-2">{{'Oxford street 1502'}}</p></div>
                </div>
                <div class="personal-info__field d-flex align-items-center">
                    <p class="personal-label label-field">Date of birth:</p>
                    <div class="input-field d-flex align-items-center"><p class="mt-2">{{'29/02/1990'}}</p>
                    <i class="fas fa-gift ml-auto mr-3 personal-info__field--icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
