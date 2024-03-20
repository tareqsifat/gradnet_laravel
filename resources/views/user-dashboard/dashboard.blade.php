@extends('user-dashboard.layout.index')
@section('content')
    <div class="content pt-0">
        <div class="content-wrapper">
            <div>
                <div class="no-gutters mx-n2 row">
                    <div class="px-2 col-lg-8">
                        <div>
                            <div class="Loader" style="position: relative;">
                                <div class="Loader__content" style="opacity: 1;">
                                    <div class="mb-3 card">
                                        <div class="bg-light card-header">
                                            <div class="d-flex">
                                                <div class="avatar avatar-2xl">
                                                    <img class="rounded-circle" src="{{asset('assets/web/user-dashboard')}}/fq03sClMvBP5rDnp0pFN40dM5LhkSZUdWzxi3XL9.jpeg" alt="" /></div>
                                                <div class="flex-1 align-self-center ml-2">
                                                    <p class="mb-1 line-height-1"><span>Mezbaul Haque Chowdhury</span></p>
                                                    <p class="mb-0 fs--1">
                                                        <svg
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="far"
                                                            data-icon="clock"
                                                            class="svg-inline--fa fa-clock fa-w-16 mr-1"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                            ></path>
                                                        </svg>
                                                        <span><span title="a year ago">16 Apr 2023 04:13 AM</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body">
                                            <div class="btn-reveal-trigger">
                                                <div class="overflow-hidden p-3 media">
                                                    <div class="bg-200 flex-center d-flex flex-column mr-2 rounded p-2 media-left avatar avatar-3xl">
                                                        <svg
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="briefcase"
                                                            class="svg-inline--fa fa-briefcase fa-w-16"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"
                                                            ></path>
                                                        </svg>
                                                        <span class="fs--1">Job</span>
                                                    </div>
                                                    <div class="ml-2 d-sm-flex justify-content-sm-between media-body">
                                                        <div>
                                                            <a href="https://demo.gradnet.xyz/jobs/9"><h6 class="fs-0 mb-1">Testing jobs</h6></a>
                                                            <h6 class="mb-1 font-weight-normal fs--1 text-600">
                                                                Technext Limited<span class="mx-1">•</span><span><span title="a year ago">16 Apr 2023 04:13 AM</span></span>
                                                            </h6>
                                                            <p class="mb-0 mt-2">
                                                                <span class="mr-2 badge badge-light"><span class="ml-1">(Negotiable)</span></span><span class="badge badge-light">Full-time</span>
                                                            </p>
                                                        </div>
                                                        <div class="d-none d-sm-block ml-2">
                                                            <a class="text-primary mt-2 mt-sm-0 border-sm-0 border border-200 btn btn-reveal btn-sm" href="https://demo.gradnet.xyz/jobs/9">Apply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-3">
                                                    <div class="d-flex align-items-center justify-content-between font-weight-light">
                                                        <div>
                                                            <span class="bg-light px-2 py-1 fs--1 mr-1 rounded-capsule" id="feed-reaction-102-count-show-upvote">
                                                                <span class="mr-1">
                                                                    <svg
                                                                        aria-hidden="true"
                                                                        focusable="false"
                                                                        data-prefix="far"
                                                                        data-icon="gem"
                                                                        class="svg-inline--fa fa-gem fa-w-18 mr-1"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512"
                                                                    >
                                                                        <path
                                                                            d="M344.265,255.139H214.283c-6.774,0-12.71-4.531-14.496-11.065c-1.786-6.534,1.02-13.455,6.851-16.902 c56.633-33.464,86.05-72.5,89.93-119.338c1.353-16.255,15.831-29.239,32.266-29.024c16.77,0.268,32.481,6.99,44.248,18.93 c11.776,11.951,18.266,27.777,18.272,44.561c0,0.002,0,0.004,0,0.006v5.049c0,41-12.144,67.142-34.551,101.04 C354.018,252.607,349.311,255.139,344.265,255.139z"
                                                                            style="fill: rgb(255, 195, 128);"
                                                                        ></path>
                                                                        <path
                                                                            d="M503.562,272.171c0-25.964-21.123-47.088-47.088-47.088H214.283c-2.691,0-5.333,0.722-7.648,2.092 c-17.001,10.052-34.167,18.327-47.96,24.978c-4.811,2.319-9.355,4.51-13.488,6.576c-5.091,2.546-8.307,7.749-8.307,13.442v192.359 c0,5.693,3.216,10.896,8.307,13.442C205.91,508.329,256.386,512,315.247,512c9.115,0,18.437-0.088,28.023-0.178 c10.602-0.1,21.563-0.204,33.055-0.204h47.509c25.964,0,47.088-21.123,47.088-47.088c0-8.73-2.387-16.912-6.545-23.929 c13.529-8.282,22.575-23.199,22.575-40.191c0-8.73-2.387-16.912-6.545-23.929c13.529-8.282,22.575-23.199,22.575-40.191 c0-12.212-4.673-23.353-12.324-31.728C498.99,295.781,503.562,284.328,503.562,272.171z"
                                                                            style="fill: rgb(255, 207, 153);"
                                                                        ></path>
                                                                        <g>
                                                                            <path
                                                                                d="M472.303,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S480.603,141.117,472.303,141.117z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M247.884,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S256.185,141.117,247.884,141.117z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M295.989,57.826c-5.195,0-10.245-2.695-13.028-7.516l-16.03-27.765 c-4.15-7.187-1.687-16.379,5.5-20.528c7.187-4.15,16.379-1.687,20.528,5.5l16.03,27.765c4.15,7.187,1.687,16.379-5.5,20.528 C301.123,57.177,298.538,57.826,295.989,57.826z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M392.139,57.826c-2.55,0-5.134-0.649-7.5-2.016c-7.187-4.15-9.65-13.341-5.5-20.528l16.03-27.765 c4.149-7.187,13.341-9.652,20.528-5.5c7.187,4.15,9.65,13.341,5.5,20.528l-16.03,27.765 C402.386,55.131,397.333,57.826,392.139,57.826z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                        </g>
                                                                        <path
                                                                            id="SVGCleanerId_0"
                                                                            d="M102.613,432.66v79.148H72.557V432.66c0-8.295,6.733-15.028,15.028-15.028 S102.613,424.365,102.613,432.66z"
                                                                            style="fill: rgb(115, 195, 255);"
                                                                        ></path>
                                                                        <g>
                                                                            <path
                                                                                d="M472.303,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S480.603,141.117,472.303,141.117z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M247.884,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S256.185,141.117,247.884,141.117z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M295.989,57.826c-5.195,0-10.245-2.695-13.028-7.516l-16.03-27.765 c-4.15-7.187-1.687-16.379,5.5-20.528c7.187-4.15,16.379-1.687,20.528,5.5l16.03,27.765c4.15,7.187,1.687,16.379-5.5,20.528 C301.123,57.177,298.538,57.826,295.989,57.826z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                            <path
                                                                                d="M392.139,57.826c-2.55,0-5.134-0.649-7.5-2.016c-7.187-4.15-9.65-13.341-5.5-20.528l16.03-27.765 c4.149-7.187,13.341-9.652,20.528-5.5c7.187,4.15,9.65,13.341,5.5,20.528l-16.03,27.765 C402.386,55.131,397.333,57.826,392.139,57.826z"
                                                                                style="fill: rgb(41, 204, 177);"
                                                                            ></path>
                                                                        </g>
                                                                        <g>
                                                                            <path
                                                                                id="SVGCleanerId_0_1_"
                                                                                d="M102.613,432.66v79.148H72.557V432.66c0-8.295,6.733-15.028,15.028-15.028 S102.613,424.365,102.613,432.66z"
                                                                                style="fill: rgb(115, 195, 255);"
                                                                            ></path>
                                                                        </g>
                                                                        <path
                                                                            d="M151.705,225.083H23.466c-8.295,0-15.028,6.733-15.028,15.028v256.478 c0,8.305,6.733,15.028,15.028,15.218h96.179c18.424-0.19,34.404-10.82,42.129-26.269c3.176-6.322,4.959-13.465,4.959-21.009V240.111 C166.733,231.815,160,225.083,151.705,225.083z"
                                                                            style="fill: rgb(68, 164, 236);"
                                                                        ></path>
                                                                        <path
                                                                            d="M102.613,431.658v80.15H72.557v-80.15c0-8.295,6.733-15.028,15.028-15.028 S102.613,423.363,102.613,431.658z"
                                                                            style="fill: rgb(115, 195, 255);"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                1
                                                            </span>
                                                        </div>
                                                        <div><button type="button" class="fs-0 font-weight-light text-700 outline-none btn btn-link btn-sm">No Comment</button></div>
                                                    </div>
                                                    <hr class="border-200 mt-2 mb-1" />
                                                    <div class="d-flex">
                                                        <button type="button" id="feed-reaction-102" class="border-0 font-weight-normal text-primary btn btn-outline-light btn-block">
                                                            <svg
                                                                aria-hidden="true"
                                                                focusable="false"
                                                                data-prefix="far"
                                                                data-icon="gem"
                                                                class="svg-inline--fa fa-gem fa-w-18 mr-1"
                                                                role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"
                                                            >
                                                                <path
                                                                    d="M344.265,255.139H214.283c-6.774,0-12.71-4.531-14.496-11.065c-1.786-6.534,1.02-13.455,6.851-16.902 c56.633-33.464,86.05-72.5,89.93-119.338c1.353-16.255,15.831-29.239,32.266-29.024c16.77,0.268,32.481,6.99,44.248,18.93 c11.776,11.951,18.266,27.777,18.272,44.561c0,0.002,0,0.004,0,0.006v5.049c0,41-12.144,67.142-34.551,101.04 C354.018,252.607,349.311,255.139,344.265,255.139z"
                                                                    style="fill: rgb(255, 195, 128);"
                                                                ></path>
                                                                <path
                                                                    d="M503.562,272.171c0-25.964-21.123-47.088-47.088-47.088H214.283c-2.691,0-5.333,0.722-7.648,2.092 c-17.001,10.052-34.167,18.327-47.96,24.978c-4.811,2.319-9.355,4.51-13.488,6.576c-5.091,2.546-8.307,7.749-8.307,13.442v192.359 c0,5.693,3.216,10.896,8.307,13.442C205.91,508.329,256.386,512,315.247,512c9.115,0,18.437-0.088,28.023-0.178 c10.602-0.1,21.563-0.204,33.055-0.204h47.509c25.964,0,47.088-21.123,47.088-47.088c0-8.73-2.387-16.912-6.545-23.929 c13.529-8.282,22.575-23.199,22.575-40.191c0-8.73-2.387-16.912-6.545-23.929c13.529-8.282,22.575-23.199,22.575-40.191 c0-12.212-4.673-23.353-12.324-31.728C498.99,295.781,503.562,284.328,503.562,272.171z"
                                                                    style="fill: rgb(255, 207, 153);"
                                                                ></path>
                                                                <g>
                                                                    <path
                                                                        d="M472.303,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S480.603,141.117,472.303,141.117z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M247.884,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S256.185,141.117,247.884,141.117z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M295.989,57.826c-5.195,0-10.245-2.695-13.028-7.516l-16.03-27.765 c-4.15-7.187-1.687-16.379,5.5-20.528c7.187-4.15,16.379-1.687,20.528,5.5l16.03,27.765c4.15,7.187,1.687,16.379-5.5,20.528 C301.123,57.177,298.538,57.826,295.989,57.826z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M392.139,57.826c-2.55,0-5.134-0.649-7.5-2.016c-7.187-4.15-9.65-13.341-5.5-20.528l16.03-27.765 c4.149-7.187,13.341-9.652,20.528-5.5c7.187,4.15,9.65,13.341,5.5,20.528l-16.03,27.765 C402.386,55.131,397.333,57.826,392.139,57.826z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                </g>
                                                                <path
                                                                    id="SVGCleanerId_0"
                                                                    d="M102.613,432.66v79.148H72.557V432.66c0-8.295,6.733-15.028,15.028-15.028 S102.613,424.365,102.613,432.66z"
                                                                    style="fill: rgb(115, 195, 255);"
                                                                ></path>
                                                                <g>
                                                                    <path
                                                                        d="M472.303,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S480.603,141.117,472.303,141.117z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M247.884,141.117h-32.06c-8.299,0-15.028-6.729-15.028-15.028s6.729-15.028,15.028-15.028h32.06 c8.299,0,15.028,6.729,15.028,15.028S256.185,141.117,247.884,141.117z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M295.989,57.826c-5.195,0-10.245-2.695-13.028-7.516l-16.03-27.765 c-4.15-7.187-1.687-16.379,5.5-20.528c7.187-4.15,16.379-1.687,20.528,5.5l16.03,27.765c4.15,7.187,1.687,16.379-5.5,20.528 C301.123,57.177,298.538,57.826,295.989,57.826z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                    <path
                                                                        d="M392.139,57.826c-2.55,0-5.134-0.649-7.5-2.016c-7.187-4.15-9.65-13.341-5.5-20.528l16.03-27.765 c4.149-7.187,13.341-9.652,20.528-5.5c7.187,4.15,9.65,13.341,5.5,20.528l-16.03,27.765 C402.386,55.131,397.333,57.826,392.139,57.826z"
                                                                        style="fill: rgb(41, 204, 177);"
                                                                    ></path>
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        id="SVGCleanerId_0_1_"
                                                                        d="M102.613,432.66v79.148H72.557V432.66c0-8.295,6.733-15.028,15.028-15.028 S102.613,424.365,102.613,432.66z"
                                                                        style="fill: rgb(115, 195, 255);"
                                                                    ></path>
                                                                </g>
                                                                <path
                                                                    d="M151.705,225.083H23.466c-8.295,0-15.028,6.733-15.028,15.028v256.478 c0,8.305,6.733,15.028,15.028,15.218h96.179c18.424-0.19,34.404-10.82,42.129-26.269c3.176-6.322,4.959-13.465,4.959-21.009V240.111 C166.733,231.815,160,225.083,151.705,225.083z"
                                                                    style="fill: rgb(68, 164, 236);"
                                                                ></path>
                                                                <path
                                                                    d="M102.613,431.658v80.15H72.557v-80.15c0-8.295,6.733-15.028,15.028-15.028 S102.613,423.363,102.613,431.658z"
                                                                    style="fill: rgb(115, 195, 255);"
                                                                ></path>
                                                            </svg>
                                                            Like
                                                        </button>
                                                        <button type="button" class="mt-0 border-0 text-600 font-weight-normal btn btn-outline-light btn-block">
                                                            <svg
                                                                aria-hidden="true"
                                                                focusable="false"
                                                                data-prefix="far"
                                                                data-icon="comment-alt"
                                                                class="svg-inline--fa fa-comment-alt fa-w-16"
                                                                role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"
                                                            >
                                                                <path
                                                                    fill="currentColor"
                                                                    d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm16 352c0 8.8-7.2 16-16 16H288l-12.8 9.6L208 428v-60H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h384c8.8 0 16 7.2 16 16v288z"
                                                                ></path>
                                                            </svg>
                                                            Comment
                                                        </button>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div class="collapse show">
                                                            <div>
                                                                <div class="comments py-3 border-top border-200">
                                                                    <div>
                                                                        <div class="d-flex align-items-center media">
                                                                            <div class="mr-2 avatar avatar-xl">
                                                                                <img class="border rounded-circle" src="{{asset('assets/web/user-dashboard')}}/60cEoYJxafZR5WAWVwilPhiv7n5b1pLpBgysVtQm.png" />
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <form class="">
                                                                                    <div class="mb-0 form-group">
                                                                                        <input
                                                                                            type="text"
                                                                                            name="comment"
                                                                                            class="form-control rounded-capsule bg-200 border-200"
                                                                                            placeholder="Write a comment..."
                                                                                            value=""
                                                                                        />
                                                                                        <div class="invalid-feedback"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 card">
                                        <div class="bg-light card-header">
                                            <div class="d-flex">
                                                <div class="avatar avatar-2xl"><img class="rounded-circle" src="{{asset('assets/web/user-dashboard')}}/fq03sClMvBP5rDnp0pFN40dM5LhkSZUdWzxi3XL9.jpeg" alt="" /></div>
                                                <div class="flex-1 align-self-center ml-2">
                                                    <p class="mb-1 line-height-1"><span>Mezbaul Haque Chowdhury</span></p>
                                                    <p class="mb-0 fs--1">
                                                        <svg
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="far"
                                                            data-icon="clock"
                                                            class="svg-inline--fa fa-clock fa-w-16 mr-1"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                            ></path>
                                                        </svg>
                                                        <span><span title="a year ago">16 Apr 2023 04:02 AM</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body">
                                            <div>
                                                <div class="p-3 overflow-hidden">
                                                    <a href="https://demo.gradnet.xyz/articles/19"><h2 class="fs-0 fs-md-1 mb-2">Title</h2></a>
                                                    <div class="mb-0">
                                                        <div><div>Your March performance&nbsp;on Google Searchhttps://technext.it/495Clicks (web)52.4KImpressions (web)</div></div>
                                                    </div>
                                                </div>
                                                <div class="px-3">
                                                    <div class="d-flex align-items-center justify-content-between font-weight-light">
                                                        <div></div>
                                                        <div><button type="button" class="fs-0 font-weight-light text-700 outline-none btn btn-link btn-sm">No Comment</button></div>
                                                    </div>
                                                    <hr class="border-200 mt-2 mb-1" />
                                                    <div class="d-flex">
                                                        <button type="button" id="feed-reaction-101" class="border-0 font-weight-normal text-600 btn btn-outline-light btn-block">
                                                            <svg
                                                                aria-hidden="true"
                                                                focusable="false"
                                                                data-prefix="fas"
                                                                data-icon="thumbs-up"
                                                                class="svg-inline--fa fa-thumbs-up fa-w-16 mr-1"
                                                                role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"
                                                            >
                                                                <path
                                                                    fill="currentColor"
                                                                    d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"
                                                                ></path>
                                                            </svg>
                                                            Like
                                                        </button>
                                                        <button type="button" class="mt-0 border-0 text-600 font-weight-normal btn btn-outline-light btn-block">
                                                            <svg
                                                                aria-hidden="true"
                                                                focusable="false"
                                                                data-prefix="far"
                                                                data-icon="comment-alt"
                                                                class="svg-inline--fa fa-comment-alt fa-w-16"
                                                                role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"
                                                            >
                                                                <path
                                                                    fill="currentColor"
                                                                    d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm16 352c0 8.8-7.2 16-16 16H288l-12.8 9.6L208 428v-60H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h384c8.8 0 16 7.2 16 16v288z"
                                                                ></path>
                                                            </svg>
                                                            Comment
                                                        </button>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div class="collapse show">
                                                            <div>
                                                                <div class="comments py-3 border-top border-200">
                                                                    <div>
                                                                        <div class="d-flex align-items-center media">
                                                                            <div class="mr-2 avatar avatar-xl">
                                                                                <img class="border rounded-circle" src="{{asset('assets/web/user-dashboard')}}/60cEoYJxafZR5WAWVwilPhiv7n5b1pLpBgysVtQm.png" />
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <form class="">
                                                                                    <div class="mb-0 form-group">
                                                                                        <input
                                                                                            type="text"
                                                                                            name="comment"
                                                                                            class="form-control rounded-capsule bg-200 border-200"
                                                                                            placeholder="Write a comment..."
                                                                                            value=""
                                                                                        />
                                                                                        <div class="invalid-feedback"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 col-lg-4"><div class="sticky-top sticky-sidebar"></div></div>
                </div>
            </div>
        </div>
        <footer class="my-4">
            <div class="justify-content-between fs-0 row">
                <div class="col-12 col-sm-auto">
                    <div class="d-flex flex-wrap">
                        Built with
                        <a href="https://gradnet.io/" target="_blank" rel="noopener noreferrer" class="mx-1">
                            <div class="d-inline-flex align-items-center font-weight-medium" style="color: rgb(44, 123, 229);">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAYAAAA5ZDbSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAGfGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTAxLTA3VDExOjAwOjMzKzA2OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wNC0yN1QxMjo0NToxOCswNjowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0wNC0yN1QxMjo0NToxOCswNjowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NTdmMzk5OC0wMzkwLTBjNGQtYjI4Ni1hM2JlYjc1ZGIwYzAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDI4ZTI3YjgtY2RkMC01YzQ1LTk1NTQtZDFiOWMzNGFkYjY4IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MDI4ZTI3YjgtY2RkMC01YzQ1LTk1NTQtZDFiOWMzNGFkYjY4Ij4gPHBob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHJkZjpCYWc+IDxyZGY6bGk+eG1wLmRpZDo5ZWQyZDM0MS01M2RkLTc3NDAtOTk2OC1kMmI3ZDJjNjFkYjA8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDowMjhlMjdiOC1jZGQwLTVjNDUtOTU1NC1kMWI5YzM0YWRiNjgiIHN0RXZ0OndoZW49IjIwMjAtMDEtMDdUMTE6MDA6MzMrMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6OTU3ZjM5OTgtMDM5MC0wYzRkLWIyODYtYTNiZWI3NWRiMGMwIiBzdEV2dDp3aGVuPSIyMDIwLTA0LTI3VDEyOjQ1OjE4KzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+piXq/AAAFoRJREFUeJztnXtwHMWdxz8zs7PalVaW/EB+SLZsbBkDtrGNjRWwFfPyEXMOYBwuhQkkqToSLtyRCwUEUuQqOfKskLoHdeTy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"
                                    alt="Gradnet"
                                    style="width: 24px; height: 24px; margin-right: 3px;"
                                />
                                Gradnet
                            </div>
                        </a>
                        by<a href="https://technext.it/" target="_blank" rel="noopener noreferrer" class="mx-1" style="color: rgb(94, 110, 130);">Technext</a>
                    </div>
                </div>
                <div class="col-12 col-sm-auto"><p class="mb-0">© 2024 Alumni Association</p></div>
            </div>
        </footer>
    </div>
@endsection
