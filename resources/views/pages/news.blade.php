{{-- STYLING OF NEWS BLADE IS IN  ACTIVITIES.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="news">
        <div class="news__header d-flex align-items-center mb-4">
            <div class="news__header--latest d-flex flex-column align-items-start">
                <p class="news__header--latest-text mb-2 u-text-active">Latest News</p>
                <p class="news__header--latest-date">{{'10/18/2020'}}</p>
            </div>
            <span class="news__header-add ml-auto">+</span>
        </div>
        <div class="news__pictures d-flex mb-5">
            <div class="news__pictures--main-wrapper d-flex">
                <div class="d-flex flex-column" style="width: 100%;">
                    <img class="flex-grow-1" src="{{ URL::to('/assets/img/ship_news.jpg') }}" alt="ship">
                    <p class="news__pictures--subtext">{{'Brexit: Why France is raising steaks over fishing'}}</p>
                </div>
                <span class="jobs__three-dots ml-2">⠇</span>
            </div>
            <div class="news__pictures--side d-flex flex-column">
                <div class="d-flex">
                    <div class="d-flex flex-column" style="width: 100%;">
                        <img src="{{ URL::to('/assets/img/marina_photo_1.jpg') }}" alt="marina">
                        <p class="news__pictures--subtext">{{'What trade deals has the UK done so far?'}}</p>
                    </div>
                    <span class="jobs__three-dots ml-2">⠇</span>
                </div>
                <div class="d-flex">
                    <div class="d-flex flex-column" style="width: 100%;">
                        <img src="{{ URL::to('/assets/img/fishes.jpg') }}" alt="fishes">
                        <p class="news__pictures--subtext">{{'Who really owns UK fishing quotas?'}}</p>
                    </div>
                    <span class="jobs__three-dots ml-2">⠇</span>
                </div>
            </div>
        </div>
        <div class="news__main d-flex align-items-start">
            <div class="news__main--side-picture d-flex">
                <img class="img-fluid" src="{{ URL::to('/assets/img/marina_photo_2.jpg') }}" alt="marina">
                <span class="jobs__three-dots ml-2">⠇</span>
            </div>
            <div class="news__main--text">
                <p class="news__main--text-heading">{{'Fisheries management shake-up in Scotland'}}</p>
                <p class="news__main--text-subheading"{{'Plans well advanced for major changes'}}</p>
                <p class="news__main--text-date mb-3">{{'10/17/2020'}}</p>
                <p>{{'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut id ipsam repellat aspernatur numquam placeat, molestiae dolor vel nobis adipisci harum! Nesciunt aliquam repellat veritatis atque, quis doloribus ex?'}}</p>
                <p>{{'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptate numquam, est quasi dolorem quas cupiditate excepturi odit, similique praesentium optio voluptas accusamus dolor rerum eveniet ab non totam veritatis alias minus molestias commodi assumenda hic deserunt. Ut beatae est, rem, fugiat quasi dolor odio dolorum eius ea debitis cupiditate.'}}</p>
                <p>{{'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vel!'}}</p>
                <p>{{'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus itaque exercitationem quae, molestias dolore. Maiores, nobis corporis. Officiis provident qui cupiditate distinctio eos, animi vel consequuntur rem neque optio.'}}</p>
            </div>
        </div>
        <div class="news__pagination d-flex my-4">
            <div class="news__pagination--list ml-auto">
                <a href="#" class="news__pagination--prev">&larr;</a>
                <a href="#" class="news__pagination--item active">1</a>
                <a href="#" class="news__pagination--item" class="active">2</a>
                <a href="#" class="news__pagination--item">3</a>
                <a href="#" class="news__pagination--item">4</a>
                <a href="#" class="news__pagination--item">5</a>
                <a href="#" class="news__pagination--item">6</a>
                <a href="#" class="news__pagination--next">&rarr;</a>
            </div>
        </div>
    </div>
@endsection
