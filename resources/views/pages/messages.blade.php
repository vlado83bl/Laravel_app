{{-- STYLING OF MESSAGES BLADE IS IN  COMMUNICATIONS.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="messages">
        <div class="messages__header d-flex align-items-center mb-4">
            <div class="messages__search d-flex align-items-center">
                <i class="fas fa-search messages__search--input-icon"></i>
                <input class="messages__search--input" type="search" aria-label="Search through messages" placeholder="Search">
            </div>
            <p class="messages__admin">{{'Jin T. Walker'}}</p>
            <div class="ml-auto messages__print d-flex flex-column align-items-center">
                <i class="fas fa-print"></i>
                <p>Print</p>
            </div>
        </div>
        <div class="messages-wrapper d-flex">
            <div class="messages__list d-flex flex-column">
                <div class="messages__list--header d-flex align-items-center">
                    <p>Group by:</p>
                    <button class="btn btn-primary messages__list--header-users">Users</button>
                    <button class="btn messages__list--header-activities">Activities</button>
                </div>
                <div class="messages__list--items d-flex flex-column">
                    <div class="messages__list--item d-flex align-items-start">
                        <span class="messages__list--item-status-active"></span>
                        <div class="messages__list--item-wrapper d-flex">
                            <img src="{{ URL::to('/assets/img/user_photo_2.jpg') }}" alt="user picture" class="messages__list--user-picture">
                            <div class="messages__list--item-data d-flex flex-column justify-content-start">
                                <p class="messages__list--item-name">{{'Adam Rodrigues'}}</p>
                                <p class="messages__text">{{'Hello, can you send me credentialns for Wind Turbine, i have some issue?'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="messages__list--item d-flex align-items-start">
                        <span class="messages__list--item-status-active"></span>
                        <div class="messages__list--item-wrapper d-flex">
                            <img src="{{ URL::to('/assets/img/user_photo_3.jpg') }}" alt="user picture" class="messages__list--user-picture">
                            <div class="messages__list--item-data d-flex flex-column justify-content-start">
                                <p class="messages__list--item-name">{{'Jin T. Walker'}}</p>
                                <p class="messages__text">{{'Okay.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="messages__list--item d-flex align-items-start">
                        <span class="messages__list--item-status-active"></span>
                        <div class="messages__list--item-wrapper d-flex">
                            <img src="{{ URL::to('/assets/img/user_photo_4.jpg') }}" alt="user picture" class="messages__list--user-picture">
                            <div class="messages__list--item-data d-flex flex-column justify-content-start">
                                <p class="messages__list--item-name">{{'Paul Taylor'}}</p>
                                <p class="messages__text">{{'Ok. Thank you.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="messages__list--item d-flex align-items-start">
                        <span class="messages__list--item-status-inactive"></span>
                        <div class="messages__list--item-wrapper d-flex">
                            <img src="{{ URL::to('/assets/img/user_photo_5.jpg') }}" alt="user picture" class="messages__list--user-picture">
                            <div class="messages__list--item-data d-flex flex-column justify-content-start">
                                <p class="messages__list--item-name">{{'William Anderson'}}</p>
                                <p class="messages__text">{{'Allright. Then I will change it.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="messages__list--item d-flex align-items-start">
                        <span class="messages__list--item-status-inactive"></span>
                        <div class="messages__list--item-wrapper d-flex">
                            <img src="{{ URL::to('/assets/img/user_photo_6.jpg') }}" alt="user picture" class="messages__list--user-picture">
                            <div class="messages__list--item-data d-flex flex-column justify-content-start">
                                <p class="messages__list--item-name">{{'Harry Poulam'}}</p>
                                <p class="messages__text">{{'Verification code sent.'}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="messages__content d-flex flex-column">
                <div class="text-center mb-4">
                    <p>Today</p>
                </div>
                <div class="mb-5 messages__content--items d-flex flex-column">
                    <div class="messages__content--user d-flex justify-content-end">
                        <div class="messages__content--user-wrapper d-flex flex-column">
                            <div class="messages__content--user-box">{{'Hi, will boats patrol this area whole day?'}}</div>
                            <p class="messages__content--time">{{'05:55'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo_6.jpg') }}" alt="user image" class="messages__content--user-img">
                    </div>
                    <div class="messages__content--user d-flex justify-content-end">
                        <div class="messages__content--user-wrapper d-flex flex-column">
                            <div class="messages__content--user-box">{{'I will be passing about 13pm so hope we can arange somehow?'}}</div>
                            <p class="messages__content--time">{{'06:00'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo_6.jpg') }}" alt="user image" class="messages__content--user-img">
                    </div>
                    <div class="messages__content--admin d-flex justify-content-start">
                        <div class="messages__content--admin-wrapper d-flex flex-column">
                            <div class="messages__content--admin-box">{{'Hi, boats will be working in this area between 07 am until'}} <br> {{'09am so you can pass this area after 09:30 am'}}</div>
                            <p class="messages__content--time">{{'10:00'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo.jpg') }}" alt="user image" class="messages__content--admin-img">
                    </div>
                    <div class="messages__content--user d-flex justify-content-end">
                        <div class="messages__content--user-wrapper d-flex flex-column">
                            <div class="messages__content--user-box">{{'Thanks.'}}</div>
                            <p class="messages__content--time">{{'12:31'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo_6.jpg') }}" alt="user image" class="messages__content--user-img">
                    </div>
                    <div class="messages__content--admin d-flex justify-content-start">
                        <div class="messages__content--admin-wrapper d-flex flex-column">
                            <div class="messages__content--admin-box">{{'It is our pleasure to help'}}</div>
                            <p class="messages__content--time">{{'12:33'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo.jpg') }}" alt="user image" class="messages__content--admin-img">
                    </div>
                    <div class="messages__content--user d-flex justify-content-end">
                        <div class="messages__content--user-wrapper d-flex flex-column">
                            <div class="messages__content--user-box">{{'Bye.'}}</div>
                            <p class="messages__content--time">{{'13:00'}}</p>
                        </div>
                        <img src="{{ URL::to('/assets/img/user_photo_6.jpg') }}" alt="user image" class="messages__content--user-img">
                    </div>
                </div>
                <div class="messages__type d-flex align-items-center">
                    <input class="messages__type--space" type="text" placeholder="Type message">
                    <i class="far fa-paper-plane messages__type--space-icon"></i>
                </div>
            </div>
        </div>  
    </div>
@endsection
