{{-- STYLING OF JOBS BLADE IS IN  USERS.SCSS FILE--}}
@extends('layouts/app')

@section('content')
    <div class="jobs">
        {{-- JOBS HEADER --}}
        <div class="jobs__header d-flex align-items-center mb-4">
            <div class="jobs__header--latest d-flex flex-column align-items-start">
                <p class="jobs__header--latest-text mb-2 u-text-active">{{'Latest Jobs'}}</p>
                <p class="jobs__header--latest-date">{{'10/18/2020'}}</p>
            </div>
            <span class="jobs__header-add ml-auto">+</span>
        </div>
        <div class="jobs__list">
            <div class="jobs__list--categories d-flex align-items-center mb-4">
                <p id="jobs__latest" class="u-text-active">Latest Jobs</p>
                <p id="jobs__active">Active Jobs</p>
                <p id="jobs__finished">Finished Jobs</p>
            </div>
            {{-- LIST OF JOBS --}}
            <div class="jobs__list--items d-flex flex-column align-items-start">
                <div class="jobs__list--item d-flex">
                    <div class="jobs__list--item-description d-flex mt-2">
                        <div class="jobs__list--item-description-logo">
                            <img src="{{ URL::to('/assets/img/wise_employment.png') }}" alt="company logo">
                        </div>
                        <div class="jobs__list--item-description-container">
                            <p class="jobs__list--item-description-heading">{{'Filleters'}}</p>
                            <p>{{'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa provident magni quos praesentium rerum, nemo distinctio, nesciunt officiis quae ipsam, soluta necessitatibus animi incidunt? Distinctio dolorum quasi aperiam dicta. Fuga accusamus tempora perspiciatis optio cumque at, pariatur eum deserunt illo.'}}</p>
                        </div>
                    </div>
                    <div class="jobs__list--item-data d-flex flex-column">
                        <span class="jobs__three-dots ml-auto">&#10247;</span>
                        <p class="jobs__list--item-data-info">Location: {{'Plymouth, Devon, England'}}</p>
                        <p class="jobs__list--item-data-info">Type: {{'Permanent'}}</p>
                        <p class="jobs__list--item-data-info">Salary: {{'GBP11 - 11 per day'}}</p>
                        <p class="jobs__list--item-data-info">Benefits: {{'None'}}</p>
                        <p class="jobs__list--item-data-info">Job Ref: {{'KQTRFF'}}</p>
                        <p class="jobs__list--item-data-info">Posted: {{'16/10/2020'}}</p>
                    </div>
                </div>
                <div class="jobs__list--item d-flex">
                    <div class="jobs__list--item-description d-flex">
                        <div class="jobs__list--item-description-logo">
                            <img src="{{ URL::to('/assets/img/scottish_government.png') }}" alt="company logo">
                        </div>
                        <div class="jobs__list--item-description-container">
                            <p class="jobs__list--item-description-heading">{{'International Fisheries - Policy Manager (2 posts)'}}</p>
                            <p>{{'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa provident magni quos praesentium rerum, nemo distinctio, nesciunt officiis quae ipsam, soluta necessitatibus animi incidunt? Distinctio dolorum quasi aperiam dicta. Fuga accusamus tempora perspiciatis optio cumque at, pariatur eum deserunt illo.Ipsa provident magni quos praesentium rerum, nemo distinctio, nesciunt officiis quae ipsam, soluta necessitatibus animi incidunt? Distinctio dolorum quasi aperiam dicta. Fuga accusamus tempora perspiciatis optio cumque at, pariatur eum deserunt illo.'}}</p>
                        </div>
                    </div>
                    <div class="jobs__list--item-data d-flex flex-column">
                        <span class="jobs__three-dots ml-auto">&#10247;</span>
                        <p class="jobs__list--item-data-info">Location: {{'Edinburgh'}}</p>
                        <p class="jobs__list--item-data-info">Type: {{'Temporarily remote'}}</p>
                        <p class="jobs__list--item-data-info">Salary: {{'&#163;38,541 - &#163;46,599 a year'}}</p>
                        <p class="jobs__list--item-data-info">Benefits: {{'None'}}</p>
                        <p class="jobs__list--item-data-info">Job Ref: {{'OOTRF9'}}</p>
                        <p class="jobs__list--item-data-info">Posted: {{'16/10/2020'}}</p>
                    </div>
                </div>
                <div class="jobs__list--item d-flex">
                    <div class="jobs__list--item-description d-flex">
                        <div class="jobs__list--item-description-logo">
                            <img src="{{ URL::to('/assets/img/pure_human_resources.png') }}" alt="company logo">
                        </div>
                        <div class="jobs__list--item-description-container">
                            <p class="jobs__list--item-description-heading">{{'Unreal Executive Producer - Fishing Franchise'}}</p>
                            <p>{{'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa provident magni quos praesentium rerum, nemo distinctio, nesciunt officiis quae ipsam, soluta necessitatibus animi incidunt? Distinctio dolorum quasi aperiam dicta. Fuga accusamus tempora perspiciatis optio cumque at, pariatur eum deserunt illo.Ipsa provident magni quos praesentium rerum, nemo distinctio, nesciunt officiis quae ipsam, soluta necessitatibus animi incidunt? Distinctio dolorum quasi aperiam dicta. Fuga accusamus tempora perspiciatis optio cumque at, pariatur eum deserunt illo.'}}</p>
                        </div>
                    </div>
                    <div class="jobs__list--item-data d-flex flex-column">
                        <span class="jobs__three-dots ml-auto">&#10247;</span>
                        <p class="jobs__list--item-data-info">Location: {{'Chatham'}}</p>
                        <p class="jobs__list--item-data-info">Type: {{'Temporarily remote'}}</p>
                        <p class="jobs__list--item-data-info">Salary: {{'&#163;22,000 - &#163;25,000 a year'}}</p>
                        <p class="jobs__list--item-data-info">Benefits: {{'Life insurance'}}</p>
                        <p class="jobs__list--item-data-info">Job Ref: {{'1OTAF9'}}</p>
                        <p class="jobs__list--item-data-info">Posted: {{'16/10/2020'}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="jobs__pagination d-flex my-4">
            <div class="jobs__pagination--list ml-auto">
                <a href="#" class="jobs__pagination--prev">&larr;</a>
                <a href="#" class="jobs__pagination--item active">1</a>
                <a href="#" class="jobs__pagination--item" class="active">2</a>
                <a href="#" class="jobs__pagination--item">3</a>
                <a href="#" class="jobs__pagination--item">4</a>
                <a href="#" class="jobs__pagination--item">5</a>
                <a href="#" class="jobs__pagination--item">6</a>
                <a href="#" class="jobs__pagination--next">&rarr;</a>
            </div>
        </div>
    </div>
@endsection
